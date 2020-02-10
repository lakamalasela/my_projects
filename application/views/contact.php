<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Woodrox Furniture</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url().'assest/css/bootstrap.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/vendors/linericon/style.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/css/font-awesome.min.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/vendors/owl-carousel/owl.carousel.min.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/vendors/lightbox/simpleLightbox.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/vendors/nice-select/css/nice-select.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/vendors/animate-css/animate.css'?>">
        <!-- main css -->
        <link rel="stylesheet" href="<?=base_url().'assest/css/style.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/css/tiles.css'?>">
        <link rel="stylesheet" href="<?=base_url().'assest/css/responsive.css'?>">


        <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

        <link href="sweetalert.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="sweetalert.min.js" type="text/javascript"></script>

         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

         <script src="https://kit.fontawesome.com/d7969d7957.js" crossorigin="anonymous"></script>

<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<link href="https://fonts.googleapis.com/css?family=Girassol&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url().'assest/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?=base_url().'assest/css/mdb.min.css'?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?=base_url().'assest/css/style.css'?>" rel="stylesheet">


    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="#">Visit Us</a>
           					<a href="#">Online Support</a>
           				</div>
           				<div class="float-right">
           					<ul class="list header_socila">
           						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
           						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
           						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
           						<li><a href="#"><i class="fa fa-behance"></i></a></li>
           					</ul>
           				</div>
           			</div>
           		</div>
           	</div>
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""><img src="img/logo-2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="<?=base_url().'index.php/HomeController/home'?>">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="<?=base_url().'index.php/AboutController/about'?>">About</a></li> 
                                <li class="nav-item"><a class="nav-link" href="<?=base_url().'index.php/PlanController/plan'?>">Plans</a></li> 
								
                                <!-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="projects.html">Project</a></li>
										<li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li>  -->

                                
								<!-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a disable class="nav-link"  disabled="disabled">Blog</a></li>
										<li class="nav-item"><a class="nav-link" disabled="disabled">Blog Details</a></li>
									</ul>
								</li>  -->
								<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
                        <h2>CONTACT US</h2>
                        <img class="img-responsive ceylon lk-ceylon" style="width:100%;padding:20px;margin:10px;" src="<?=base_url()?>assest/img/cy1.jpg" alt="">
						<!-- <div class="page_link">
							<a href="index.html">Home</a>
							<a href="contact.html">CONTACT US</a>
						</div> -->
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->

        <div class="container">
            <!--start-->


                

<div class="container-fluid">
    <div class="row text-center">
        <h3 class="headermessage"></h3>
    </div>
    <div class="row myrow "data-aos="flip-left">
        <div class="image-block col-sm-4"  style="background: url(<?=base_url().'assest/img/con_img.jpg'?>);width:100%">
            <p> </p>
        </div>
        <div class="image-block col-sm-8" style="background: url(<?=base_url().'assest/img/h3.jpg'?>)!important;no-repeat center top;background-size:cover;">
            <div class="row">
                <div  id="lk-back" class="col-md-3">
                    <img  class="img-responsive" align="center" id="lk-home" src="<?=base_url().'assest/img/home.jpg'?>" alt=""> 
                    
                    <!-- <p> Image Info </p> -->
                </div>

                <div class="col-md-9">
                
                    <span class="badge badge-pill badge-light mybadge"><h1>Adress</h1>18/8 Dw Ruphasighe
                    <br> Mawatha,<br>
                        Nugegoda.
                    </span>


<!--jubo-->









<!--end jumbo-->




                </div>

            </div>
           
        </div>
        <div class="image-block col-sm-4" style="background: url(<?=base_url().'assest/img/h4.jpg'?>) no-repeat center top;background-size:cover;">
            <!-- <p> Image Info </p> -->
           <div class="row">
               <div class="col-md-3">
               <img class="img-responsive" id="email-lk" align="center" src="<?=base_url().'assest/img/email4.png'?>" alt="">
               
               </div>

               <div class="col-md-9">
               <span class="badge badge-pill badge-light email-badge"><h1>Email Address</h1>abc@gmail.com</span>
               </div>
           </div>
        </div>
        <div class="image-block col-sm-4" style="background: url(<?=base_url().'assest/img/h7.jpg'?>) no-repeat center top;background-size:cover;">
            <p>  </p>
        </div>
        <div class="image-block col-sm-4" style="background: url(<?=base_url().'assest/img/h8.jpg'?>) no-repeat center top;background-size:cover;">
            <p>  </p>
        </div>
        <div class="image-block col-sm-8" style="background: url(<?=base_url().'assest/img/resnew2.jpg'?>) no-repeat center top;background-size:cover;">
            <p> </p>
        </div>
        <div class="image-block col-sm-4 img5" style="background: url(<?=base_url().'assest/img/h5.jpg'?>) no-repeat center top;background-size:cover;">
            <div class="row">
                <div class="col-md-3">
                        <img style="margin-left:10px;width:100%;" class="img-responsive phone" align="center"  src="<?=base_url().'assest/img/phn3.png'?>" alt="">

                </div>

                <div class="col-md-9">
                <span class="badge badge-pill badge-light email-badge"><h1>Call Us</h1>0771475625</span>
                </div>

            </div>    
        <!-- <p> Image Info </p> -->

        </div>
    </div>
</div>


            <!--end-->


        </div>


        <section class="contact_area p_120">
            <div class="container">
                
                <!-- <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div> -->

<!--start-->




<!--end-->


                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>18/8 D,W Ruphasighe Mawatha Nugegoda</h6>
                                <p>Santa monica bullevard</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">00 (440) 9865 562</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@colorlib.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="<?php echo base_url().'index.php/ContactController/contact_action'?> " method="post"  >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="Cname" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="Cemail" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="Csubject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="Cmessage" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" id="sub" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>

                        <script>

                            // $('#sub').click(function){
                            //     Swal.fire(
                            // 'Good job!',
                            // 'You clicked the button!',
                            // 'success'
                            //     )
                            // }
                       $(document).ready(function(){
                           $("#sub").click(function(){
                           

                        Swal.fire(
                        'Message Sent!',
                        'You clicked the button!',
                        'success'
                        )

                           });
                       });
                    </script>               





                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120 lk-footer">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
                            <h3>About Us &nbsp;&nbsp;&nbsp; <img style="border-radius: 25px;" class="img img-responsive" src="<?=base_url().'assest/img/cy2new.jpg'?>" alt=""></h3> 
        					</div>
                            
                            <!-- <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p> -->
                            <ul style="list-style-type:none;">
  								<a href=""><li>WHY CEYLON ENGINEERING</li></a>
  								<a href=""><li>GALLERY</li></a>
 								 <a href=""><li>CONTACT US</li></a>
							</ul>  
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<!-- <aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside> -->
                        
                        <div class="embed-responsive embed-responsive-16by9">
  							<iframe id="utube" class="embed-responsive-item" src="https://www.youtube.com/embed/lkLwoBi7KEE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>



        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Us</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?=base_url().'assest/js/jquery-3.2.1.min.js'?>"></script>
        <script src="<?=base_url().'assest/js/popper.js'?>"></script>
        <script src="<?=base_url().'assest/js/bootstrap.min.js'?>"></script>
        <script src="<?=base_url().'assest/js/stellar.js'?>"></script>
        <script src="<?=base_url().'assest/vendors/lightbox/simpleLightbox.min.js'?>"></script>
        <script src="<?=base_url().'assest/vendors/nice-select/js/jquery.nice-select.min.js'?>"></script>
        <script src="<?=base_url().'assest/vendors/isotope/imagesloaded.pkgd.min.js'?>"></script>
        <script src="<?=base_url().'assest/vendors/isotope/isotope-min.js'?>"></script>
        <script src="<?=base_url().'assest/vendors/owl-carousel/owl.carousel.min.js'?>"></script>
        <script src="<?=base_url().'assest/js/jquery.ajaxchimp.min.js'?>"></script>
        <script src="<?=base_url().'assest/js/mail-script.js'?>"></script>
        <script src="<?=base_url().'assest/vendors/counter-up/jquery.waypoints.min.js'?>"></script>
        <script src="<?=base_url().'assest/vendors/counter-up/jquery.counterup.min.js'?>"></script>
        <!-- contact js -->
        <script src="<?=base_url().'assest/js/jquery.form.js'?>"></script>
        <script src="<?=base_url().'assest/js/jquery.validate.min.js'?>"></script>
        <script src="<?=base_url().'assest/js/contact.js'?>"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?=base_url().'assest/js/gmaps.min.js'?>"></script>
        <script src="<?=base_url().'assest/js/theme.js'?>"></script>


        <script>
  AOS.init();
</script>
    </body>
</html>