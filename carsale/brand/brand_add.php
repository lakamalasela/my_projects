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
				<!-- Header Start -->
				<div class="jumbotron">
            <?php
			include("../includes/header.php");
			
			if(!isset($_SESSION["ROLE"]) || $_SESSION["ROLE"]!="a"){  //should be login and non admin(role base condition)
                header("location: ../login.php");
            }
            
            ?>
			</div>
			<div class="row">
				<!-- Content Start -->
                <div class="col-md-3">
					<!-- Side Bar-->


				</div>
				<div class="col-md-9">
                    <!-- Form -->
                    <h2> Brand Add </h2>
                    <hr/>
                    <form action="brand_add_action.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="reset" value="RESET" class="btn btn-info"/>
                            <input type="submit" value="Save" class="btn btn-success"/>
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