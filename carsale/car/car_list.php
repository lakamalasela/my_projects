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
                    <h2> Car List</h2>
                    <a href="car_add.php" class="btn-btn-success">+</a>
                    <hr/>

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>MODEL</th>
                            <th>MEMBER</th>
                            <th>VIEWS</th>
                            <th>OPTION</th>
                            
                        </tr>

                        <?php
                        
                        include("../includes/db.php");


                        $sql = "SELECT car.id,car.title,model.name AS model_name,member.name AS member_name,car.view_count FROM car INNER JOIN model ON car.model_id=model.id INNER JOIN member ON car.member_id=member.id;";
                        $result = mysqli_query($conn,$sql);
                        // var_dump($result);

                        while($row = mysqli_fetch_array($result)){ 
                            
                        ?>


                        <tr>
                            <td><?=$row["id"] ?></td> 
                            <td><?=$row["title"]?></td>
                            <td><?=$row["model_name"]?></td>
                            <td><?=$row["member_name"]?></td>
                            <td><?=$row["view_count"]?></td>
                            
                            
                            <td>
                                <a href="brand_show.php?id=<?=$row["id"] ?>" class="btn-btn-info">Show</a>
                                <a href="brand_edit.php?id=<?=$row["id"] ?>" class="btn-btn-warning">Edit</a>
                                <a href="brand_delete.php?id=<?=$row["id"] ?>" class="btn-btn-danger">Delete</a>
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