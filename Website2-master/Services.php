<!DOCTYPE html>
<html lang="en">
  

    <?php
		include_once("NavBar.php");
     
	?>
       <title><?php print($lang["about"])?></title>
<body>

    <section class="services">
        <h1 class="section_title"><?php print($lang["abouttitle"])?></h1>
        <div class="list_services">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3><?php print($lang["firstservice"])?></h3>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3><?php print($lang["secondservice"])?></h3>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3><?php print($lang["thirdservice"])?></h3>
            </div>
        </div>
    </section>
    
</body>
</html>


