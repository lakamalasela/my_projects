<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <link href="assest/css/simple-sidebar.css" rel="stylesheet">


</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-12">
                  
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
    
    <div style="text-align:center;" class="sidebar-heading"><h4><b> Ceylon Engineering Pages</b></h4> </div>
                    <div class="list-group list-group-flush">
                      <a href="<?=base_url().'index.php/ShowController/Show_house'?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                      <a href="<?=base_url().'index.php/HomeController/home'?>" class="list-group-item list-group-item-action bg-light">HOME</a>
                      <a href="<?=base_url().'index.php/AboutController/about'?>" class="list-group-item list-group-item-action bg-light">ABOUT</a>
                      <a href="#" class="list-group-item list-group-item-action bg-light">BLOG</a>
                      <a href="<?=base_url().'index.php/ContactController/contact'?>" class="list-group-item list-group-item-action bg-light">CONTACT</a>
                      <a href="#" class="list-group-item list-group-item-action bg-light">STATUS</a>
                   </div>



    </div>

    <div class="col-md-9">
            
 <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        
    
      </tr>
    </thead>
    <tbody>
      <tr>

        <?php 
        
       foreach((array)$contacts as $contact){
          
        
        ?>

        <td><?=$contact->id?></td>
        <td><?=$contact->name?></td>
        <td><?=$contact->email?></td>
        <td><?=$contact->subject?></td>
        <td><?=$contact->message?></td>
        
        

      </tr> 
      <?php 
        }
        ?>
    </tbody>
  </table>
    
    </div>
</div>



</div>
    
</body>
</html>