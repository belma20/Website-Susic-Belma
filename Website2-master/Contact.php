<!DOCTYPE html>
<html lang="en">
    
    <?php
            include_once("NavBar.php");
        ?>
            <title><?php print($lang["contact"])?></title>
    <body>
        <section class="contact">
            <h1 class="section_title"><?php print($lang["contactsections"])?></h1>
            <div class="localisation_contact_div">
                <div class="localisation">
                    <h1><?php print($lang["addressDescription1"])?></h1>
                    <h1>Rue de Bastogne 233</h1>
                    <h1>L-5585</h1>
                </div>

                <div class="form_contact">
                    <h3><?php print($lang["formContacth3"])?></h3>
                    <form action="#">
                        <input type="text"placeholder="<?php print($lang["contactName"])?>" name="name">
                        <input type="email"placeholder="<?php print($lang["contactEmail"])?>" name="email">
                        <input type="text"placeholder="<?php print($lang["contactObject"])?>" name="object">
                        <textarea name="text" id="" cols="30" rows="10" placeholder="<?php print($lang["contactMessage"])?>"></textarea>
                        <input type="submit" value="<?php print($lang["contactSend"])?>" name="button">
                    </form>
                    
                </div>
            </div>
        </section>
    </body>
</html>