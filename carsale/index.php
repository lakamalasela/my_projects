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
			<div class="jumbotron">
            <?php
            include("./includes/header.php");
            
            ?> 
			</div>
			<div class="row">
				<!-- Content Start -->
				<div class="col-md-3">
					
				</div>
				<div class="col-md-9">

				<?php 
					
					
					include("includes/db.php");


					$sql = "SELECT * FROM car";
					$result = mysqli_query($conn,$sql);

					while($row = mysqli_fetch_array($result)){
						$photo = $row["photo"];
						if(!file_exists($photo)){
							$photo = "images/default.png";
						}
						
					?>


				
				
					<div class="row well">
						<div class="col-md-4">
							<img src="<?=$photo?>" class="img img-responsive img-thumbnail"/>
						</div>
						<div class="col-md-8">
							<h3> <?=$row["title"]?> </h3>
							<p> Milage : <?=$row["milage"]?>KM</p>
							<hr/>
							<span class="badge"> Price : <?=$row["price"]?>/=</span>
							<a href="car/car_view.php?id=<?=$row["id"]?>" class="btn btn-danger"> View</a>
						</div>
					</div>
				
						<?php
					}
					?>

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