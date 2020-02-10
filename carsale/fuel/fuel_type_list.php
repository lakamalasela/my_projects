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
            
            ?>
			</div>
			<div class="row">
				<!-- Content Start -->
                <div class="col-md-3">
					<!-- Side Bar-->

				</div>
				<div class="col-md-9">
                    <!-- Form -->
                    <h2> Fuel List</h2>
                    <hr/>

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Fuel Type</th>
                            
                            <th>OPTION</th>
                        </tr>

                        <?php
                        
                        include("../includes/db.php");


                        $sql = "SELECT * FROM fuel;";
                        $result = mysqli_query($conn,$sql);

                    // var_dump($result);

                        while($row = mysqli_fetch_array($result)){
                            
                        ?>


                        <tr>
                            <td><?=$row["id"] ?></td> 
                            <td><?=$row["fuel_type"]?></td>
                            
                       
                            <td>
                                <a href="fuel_type_show.php?id=<?=$row["id"] ?>" class="btn-btn-info">Show</a>
                                <a href="fuel_type_edit.php?id=<?=$row["id"] ?>" class="btn-btn-warning">Edit</a>
                                <a href="fuel_type_delete.php?id=<?=$row["id"] ?>" class="btn-btn-danger">Delete</a>
                            </td>

                        
                        </tr>
                        <?php
                        }
                        ?>


                    </table>
                    
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