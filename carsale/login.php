<!DOCTYPE html>

<html>
	<head>
		<title> My Car Sale </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
       

		<div class="container">
			<div class="jumbotron">
            <?php
            include("./includes/header.php");
            
            ?>
				
                <!-- Header End -->
			</div>
			<div class="row">
				<!-- Content Start -->
                <div class="col-md-3">
					<!-- Side Bar-->
					
				</div>
				<div class="col-md-9">

                    <!-- Form -->
                    <h2> <?php echo $L["login_title"]; ?>  </h2>
                    <hr/>

					<?php
					
					if(isset($_GET["msg"])){
						echo "<div class='alert alert-danger'>".$_GET["msg"]."</div>";
					}
					
					
					
					?>

                    <form action="login_action.php" method="post">
                        
                        <div class="form-group">
                            <label> <?=$L["email"]?> </label>
                            <input type="text" name="email" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                            <label> <?=$L["password"]?></label>
                            <input type="password" name="password" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input type="reset" value="<?=$L['reset']?>" class="btn btn-info"/>
                            <input type="submit" value="<?=$L['login']?>" class="btn btn-success"/>
                        </div>
                    </form>
				</div>
				<!-- Content End -->
			</div>
			<div class="well">
				<!-- Footer Start -->

				<!-- Footer End -->
			</div>
		</div>
	</body>
</html>