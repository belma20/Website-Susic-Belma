<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
    session_start();

    if(!isset($_SESSION['lang']))
        $_SESSION['lang']= "en";
    else if(isset($_GET['lang'])&& $_SESSION['lang']!= $_GET['lang'] && !empty($_GET['lang'])){
        if($_GET['lang']== "en")
            $_SESSION['lang'] = "en";
        else if ($_GET['lang']== "fr")
            $_SESSION['lang'] = "fr";
        else
            $_SESSION['lang'] = "bs";
    }

    include_once("Languages/".$_SESSION["lang"].".php");



    if(isset($_SESSION["logged"])){
        $_SESSION["logged"]= false;
        $_SESSION["user"]= "not logged in"; 
    }

    if(isset($_POST["login"])){
        $_SESSION["logged"] = true;
    }

    if(isset($_POST["logout"])){


        session_unset();
        sesstion_destroy();
        header("Location: Login.php");
    }


$Host="localhost";
$User="root";
$Psw="";
$db="MyShop";
$Connection= mysqli_connect($Host, $User, $Psw, $db);

$GiveMeProduct= $Connection->prepare("SELECT * FROM products");
$GiveMeUser= $Connection->prepare("SELECT * FROM products");




?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css?v=1.1">
</head>

<header>
		<div class="navbar">
			<a href="Index.php"><?php print($lang["home"])?></a>
			<a href="Product.php"><?php print($lang["product"])?></a>
			<a href="Services.php"><?php print($lang["about"])?></a>
			<a href="Contact.php"><?php print($lang["contact"])?></a>
			<div class="right">
                <a href="Login.php"><?php print($lang["login"])?></a>
                <a href="AddProduct.php"><?php print($lang["addproduct"])?></a>
                <a href="AddProducttwo.php"><?php print($lang["addproducttwo"])?></a>
                <a href="Upload.php"><?php print($lang["upload"])?></a>

        </div>
            <div class="Languages">
                <a href="<?=$currentPage?>.php?lang=en"><img src="Images/ukflag.png" alt=""  height="40"></a>
                <a href="<?=$currentPage?>.php?lang=bs"><img src="Images/bflag.png" alt=""  height="40"></a>
        </div>
        </div>		

</header>