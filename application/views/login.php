
        

<div class="row">

    <div class="col-md-4">
    <!--left-->
    </div>






    <div class="col-md-4">


            
<?php

if($this->session->flashdata('MSG')){

?>

<div class="alert alert-danger">
    <?=$this->session->flashdata('MSG')?>
</div>
<?php }?>


<?php if(validation_errors()){?>

<div class="alert alert-danger">
    <?php echo validation_errors()?>
</div>



<?php }?>
        



                
            <form action="<?=base_url()?>index.php/AgoController/login_action" method="post">

  
            <div class="form-group">
                <label>Email </label>
                <input type="text" name="email" class="form-control"/>
             </div>
                        
            <div class="form-group">
              <label>Password</label>
               <input type="password" name="password" class="form-control"/>
           </div>

            <div class="form-group">
               <input type="reset" value="Reset" class="btn btn-info"/>
               <input type="submit" value="Login" class="btn btn-success"/>
            </div>



            </form>         

    
    
    </div>


    <div class="col-md-4">
    <!--rigth-->
    </div>



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