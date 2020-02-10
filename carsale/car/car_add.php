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
            include("../includes/header.php");

            //Authorization
            if(!isset($_SESSION["MID"])){
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
                    <h2> Modle</h2>
                    <hr/>


                    
                    <form action="car_add_action.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Model</label>
                            <select name="model_id" class="form-control">
                                <option value="0">SELECT MODEL</option>
                                
                                
                                 <?php
                        
                                include("../includes/db.php");


                                $sql = "SELECT * FROM model";
                                $result = mysqli_query($conn,$sql);

                                while($row = mysqli_fetch_array($result)){
                            
                                 ?>

                                   <option value="<?=$row['id']?>">
                                   
                                   <?=$row['name']?>
                                   </option>

                                    <?php
                                         }
                                    ?>
                                
                            </select>
                        </div>

                    
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control"/>
                    
                    </div>


                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"/></textarea>
                    
                    </div>


                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control"/>
                    
                    </div>


                    
                    <div class="form-group">
                        <label>Fuel Type</label>
                        <input type="text" name="fuel_type" class="form-control"/>
                    
                    </div>

                    
                    
                    <div class="form-group">
                        <label>Milage</label>
                        <input type="text" name="milage" class="form-control"/>
                    
                    </div>



            


                      
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" name="year" class="form-control"/>
                    
                    </div>


                    

                      
                      <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control"/>
                    
                    </div>




                    
                      
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control"/>
                    
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