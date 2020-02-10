<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <link href="assest/css/simple-sidebar.css" rel="stylesheet">


     <!-- Boostrap 4-->


     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->


           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">



</head>
<body>








    <div class="container">

       <div class="row">
           <div class="col-md-12">



                
                <div class="jumbotron">
                            <img id="ceylon" class="img img-responsive ceylon" style="width:100%;" src="<?=base_url()?>assest/img/cy1.jpg" alt="">
                             <h1 class="display-4">Show House Page</h1>
                             <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                             <hr class="my-4">
                             <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                             <p class="lead">
                             <h1><span id="cy" class="label label-primary">Make the winning investment</span></h1> 
                             
                             
                             </p>
                             <br><br>

                            
                            <a href="<?=base_url().'index.php/AgoController/logout'?>"><button type="button" class="btn btn-warning">Logout</button></a>
                            &nbsp;&nbsp;<a href="<?=base_url().'index.php/PostController/create_post'?>" class="btn btn-info" role="button">Create House</a>

                            <h3><b>Welcome Ceylon Engineering</b>  <?=$this->session->userdata('EMAIL')?></h3> 
                        </div>











           </div>
       </div>




            <div class="row">

                <div class="col-md-3">


                    <div style="text-align:center;" class="sidebar-heading"><h4>Ceylon Engineering Pages</h4> </div>
                    <div class="list-group list-group-flush">
                      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                      <a href="<?=base_url().'index.php/HomeController/home'?>" class="list-group-item list-group-item-action bg-light">HOME</a>
                      <a href="<?=base_url().'index.php/AboutController/about'?>" class="list-group-item list-group-item-action bg-light">ABOUT</a>
                      <a href="#" class="list-group-item list-group-item-action bg-light">BLOG</a>
                      <a href="<?=base_url().'index.php/ContactController/contact'?>" class="list-group-item list-group-item-action bg-light">CONTACT</a>
                      <a href="<?=base_url().'index.php/ShowController/show_contact'?>" class="list-group-item list-group-item-action bg-light">STATUS</a>
                   </div>


















                    <!--side bar-->
                </div>


                <div class="col-md-9">


                
                            
<?php

if($this->session->flashdata('Succses_msg')){

?>

<div class="alert alert-danger">
    <?=$this->session->flashdata('Succses_msg')?>
</div>
<?php }?>







 <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>photo</th>
        <th>post_date</th>
        <th>Action</th>
    
      </tr>
    </thead>
    <tbody>
      <tr>

        <?php 
        
       foreach($details as $detail){
          
        
        ?>

        <td><?=$detail->id?></td>
        <td><?=$detail->title?></td>
        <td><?=$detail->description?></td>
        <td><img src="<?=base_url().$detail->photo?>" style="border-radius: 18px; "width="80"/></td>
        <td><?=$detail->post_date?></td>
        <td>
            <a href="<?=base_url().'index.php/PostController/show_r/'?><?=$detail->id?>" class="btn btn-success" role="button">Show House</a>
            <a href="<?=base_url().'index.php/PostController/edit/'?><?=$detail->id?>" class="btn btn-warning" role="button">Edit House</a>
            <a href="<?=base_url().'index.php/PostController/delete/'?><?=$detail->id?>" class="btn btn-danger" id="del" role="button">Delete House</a>
        </td>

      </tr> 
      <?php 
        }
        ?>
    </tbody>
  </table>

  <script>
  $('#del').click(function(){
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
      url.'{{ index.php/PostController/delete/ }}'+$detail->id
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});

  });
  </script>



                </div>

            </div>




            


    </div>




</body>
</html>