<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login_ceylon</title>

       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?=base_url().'assest/css/post.css'?>">


    <!--B3 version-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <link href="assest/css/simple-sidebar.css" rel="stylesheet">

</head>
<body>


        <div class="container">
        
            <div class="row">
            
                <div class="col-md-12">
                
                        

                        <div class="jumbotron">
                            <img id="ceylon" class="img img-responsive ceylon" style="width:100%;" src="<?=base_url()?>assest/img/cy1.jpg" alt="">
                             <h1 class="display-4">Post Update Page</h1>
                             <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                             <hr class="my-4">
                             <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                             <p class="lead">
                             <h1><span id="cy" class="label label-primary">Make the winning investment</span></h1> 
                             
                             
                             </p>
                             <br><br>

                            
                            <a href="<?=base_url().'index.php/AgoController/logout'?>"><button type="button" class="btn btn-warning">Logout</button></a>

                            <h3><b>Welcome Ceylon Engineering</b>  <?=$this->session->userdata('EMAIL')?></h3>
                        </div>




                
                </div>
            
            
            </div>








        

<div class="row">

    <div class="col-md-3">

             <div style="text-align:center;" class="sidebar-heading"><h4><b> Ceylon Engineering Pages</b></h4> </div>
                    <div class="list-group list-group-flush">
                      <a href="<?=base_url().'index.php/ShowController/Show_house'?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                      <a href="<?=base_url().'index.php/HomeController/home'?>" class="list-group-item list-group-item-action bg-light">HOME</a>
                      <a href="<?=base_url().'index.php/AboutController/about'?>" class="list-group-item list-group-item-action bg-light">ABOUT</a>
                      <a href="#" class="list-group-item list-group-item-action bg-light">BLOG</a>
                      <a href="<?=base_url().'index.php/ContactController/contact'?>" class="list-group-item list-group-item-action bg-light">CONTACT</a>
                      <a href="#" class="list-group-item list-group-item-action bg-light">STATUS</a>
                   </div>





    <!--left-->
    </div>


    <div class="col-md-9">


            <div class="alert alert-danger">

                    <?php echo validation_errors();?>
            </div>




                <form action="<?php echo base_url().'index.php/PostController/update/'?><?=$record->id?>"  method="post" enctype="multipart/form-data">
                


            <div class="form-group">
                <label>Title </label>
                <input type="text" value="<?=$record->title?>" name="title" class="form-control"/>
             </div>
                        
            <div class="form-group">
              <label>Description</label>
               <input type="text" value="<?=$record->description?>" name="description" class="form-control"/>
           </div>

                     
            <div class="form-group">
              <label>Photo</label>
               <input type="file" name="photo" class="form-control"/>
           </div>


            <div class="form-group">
               
               <input type="submit" value="Post the details" class="btn btn-success"/>
            </div>



            </form>         

              



    
    
    </div>


    <!-- <div class="col-md-4">
    
    </div> -->



</div>        
        
     
        
        
        
        
        
        </div>


<div class="container-fluid">
                   
     <div class="row">
            <div class="col-md-12">
                           
        <div class="well"></div>
        
            </div>
     </div>

</div>

    
        
    
</body>
</html>