<!DOCTYPE html>
<html lang="en">

<?php
		include_once("NavBar.php");
	?>
    <title><?php print($lang["product"])?></title>
<body>

<?php
$GiveMeProduct -> execute();
$result=$GiveMeProduct->get_result();

while($row=$result->fetch_assoc()){
    
    ?>
    <section class="heels">
        <div class="images">
            <div>
                <div class="heels">
                <div>
                    <img class="" src=<?=$row["ProductImage"]?>>
                </div>
                <span><?=$row["ProductName"]?></span>
                <span><?=$row["ProductPrice"]?></span>
                <a href="#" ><?php print($lang["BuyNow"])?></a>
        </div>
        </section>
    <?php
}


    ?>
</body>
</html>