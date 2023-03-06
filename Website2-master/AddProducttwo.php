<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Product</title>
</head>
<body>

<?php
    $file=fopen("addProduct.csv", "r");
    


    fgets($file);
    while(!feof($file)){
        $StringFromFile=fgets($file); 
        $ArrayOfElements=explode(";", $StringFromFile); 
    ?>

        <div class="Person">
            <div>Name:<?=$ArrayOfElements[0] ?></div>
            <div>Price:<?=$ArrayOfElements[1] ?></div>
        </div>
        <?php
    }
        ?>
         
<?php
		include_once("NavBar.php");
     
	?>
        <a href="AddProduct.php">Go back to the users page</a>


</body>
</html>