<!DOCTYPE html>
<html lang="en">
    <?php
		include_once("NavBar.php");
	?>
            <title><?php print($lang["login"])?></title>
    <body>
        <div class="RegisterAndLogin">
            <div class="Register">
            <?php
                if(isset($_POST["UserName"], $_POST["Psw"], $_POST["RepeatPsw"])){

                    //we register the user
                    if($_POST["Psw"] != $_POST["RepeatPsw"]){
                        header("refresh:3");
                        die("Passwords don't match. Please try again");
                    }

                    //VERIFY if the user already exists - if he/she does, we cannot register him/her again !!!
                    $file=fopen("User.csv", "r");
                    while($line=fgets($file)){
                    $arrayUserPsw=explode(";", $line);
                    if(count($arrayUserPsw)==2){
                        if($_POST["UserName"] == "" && $_POST["Psw"] == ""){
                            header("refresh:5"); 
                            die("Fill out the form");
                        }
                        //good case-we have  user and psw
                        if($_POST["UserName"]== $arrayUserPsw[0]){
                            //we just found a user in our db that already exists
                            header("refresh:3");
                            die("You are already registered in our system");
                        }
                    }
                }


                fclose($file);

                //OK NOW, we can CREATE this new guy into our system
                $file =fopen("User.csv", "a");
                fputs($file, "\n" . $_POST["UserName"]. ";" . $_POST["Psw"]);
                header("refresh:3");
                die("Congratulations, you are now registered in our system");
                } else{
                    ?>
                    <form method ="POST">
                        <div>
                            <input class="inputField" name ="UserName" placeholder="<?php print($lang["registerUsername"])?>">
                        </div>
                        <div>
                            <input type="password" class="inputField" name="Psw" placeholder="<?php print($lang["registerPassword"])?>">
                        </div>
                        <div>
                            <input class="inputField" type="password" name="RepeatPsw" placeholder="<?php print($lang["registerRepeatPassword"])?>">
                        </div>
                        <div>
                        <input type="submit" value="<?php print($lang["registerRegister"])?>" class="button">
                        </div>
                    </form>
                    <?php
                }
                ?>
                </div>
                







<!------------------------------------Login---------------------------------------------------->
            <div class="Login">
                <?php

                    if(isset($_POST["UserLogin"], $_POST["UserPsw"])){
                        $User="";
                        //we will check for a correct login
                        $GiveMeUser -> execute();
                        $result =$GiveMeUser-> get_result();
                        while($row=$result-> fetch_assoc()){
                            if(strtolower($_POST["UserLogin"]) == strtolower(trim($row["UserName"])) && strtolower($_POST["UserLogin"]) != empty($_POST["UserLogin"])){  
                                if($_POST["UserPsw"]==trim($row["UserPassword"]) && $_POST["UserPsw"] =! empty($_POST["UserPsw"])){    
                        
                        //OK - the user typed the correct password
                                    $_SESSION["logged"] = true;
                                    $_SESSION["user"] = $row["UserName"];
                                    $User= $row["UserName"];
                                    ?>
                                    <script>
                                        window.location.href="Login.php";
                                    </script>
                                    <?php

                                }else{
                                    $_SESSION["logged"] = false;
                                    header("refresh:3");
                                    //wrong password 
                                    die("ERROR. Wrong password");
                                }
                            }
                        }
                        if(empty($User)){
                            $_SESSION["logged"] = false;
                            header("refresh:5");
                            die("Wrong Username or Password Please Try Again!");
                        }
                    }
                
                    else{
                        ?>
    
                        <form method="POST">
                            <?php
                        if($_SESSION["logged"]){
                            print("WELCOME, now you are logged into our sytem. WELCOME:".$_SESSION["user"]);
                            ?>
                           <div>
                            <input type ="submit" value="<?php print($lang["logout"])?>" name="logout" class="button">
                        </div> 
                        <?php
                        }
                        
                     
                        else{
                        ?>
                            <div>
                                <input  class="inputField" name="UserLogin" placeholder="<?php print($lang["loginUsername"])?>">
                            </div>
                            <div>
                                <input type="password" class="inputField" name="UserPsw" placeholder="<?php print($lang["loginPassword"])?>">
                            </div>
                            <div>
                                <input type ="submit" value="<?php print($lang["loginLogin"])?>" name="login" class="button">
                            </div>
                        </form>
                    <?php
                    }
                        
                    }
                   
            ?>
            </div>
        </div>
    </body>
</html>