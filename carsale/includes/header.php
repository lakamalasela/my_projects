<?php


if(!isset($_SESSION)){
    session_start();
}
            $file_name="en";
            if(isset($_GET["lang"])){
                $file_name = $_GET["lang"];
            }
            $L = parse_ini_file( $_SERVER['DOCUMENT_ROOT']."/carsale/lang/$file_name.ini");
        ?>





<!-- Header Start -->



<h1> <?=$L["site_name"]?> </h1>
				<p> <?=$L["slogan"]?> </p>
				<hr/>

                <?php 
                
                if(isset($_SESSION["MID"])){
                    echo "WELCOME ".$_SESSION["NAME"];
                    ?>

                    
                    <a href="http://localhost/carsale/logout.php" class="btn btn-success">Logout</a>
                    <a href="car/car_add.php" class="btn btn-success pull-right">Post Your Car</a>
               <?php
                }else{
                    ?>
                 
				<a href="login.php" class="btn btn-success"> <?=$L["login"]?> </a>
				<a href="register.php" class="btn btn-warning"> <?=$L["register"]?> </a>
				
                
                

                <?php 
                }
                ?>


                <div class="pull-right">
                    <a href="?lang=si" class="btn"> SI </a>
                    <a href="?lang=en" class="btn"> EN </a>
                    <a href="?lang=it" class="btn"> IT </a>
                </div>
                