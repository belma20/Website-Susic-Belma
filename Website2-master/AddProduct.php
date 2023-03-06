<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style.css?v=1.1">
    <title>Add Product</title>
</head>
<body>
    
<?php
  
  include_once("NavBar.php");


  if(isset($_POST["UserName"], $_POST["UserAge"], $_POST["UserHeight"], $_POST["UserMoney"])){
   $file=fopen("FirstDataBase.csv", "a");
   fputs($file,"\n". $_POST["UserName"]. ";".$_POST["UserAge"]. ";".$_POST["UserHeight"]. ";".$_POST["UserMoney"]);
   }
?>

<form method="POST">
   Name:<input name="ProductName">
   Price:<input name="ProductPrice">
   <input type="Submit" value="Save">
</form>

<a href="AddProducttwo.php">Go back to the list</a>




</body>
</html>