<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Care Wheels | Login to drive</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<style>
    label{
        color: white;
        
    }
</style>
<div class="page-wrapper">
 	
    <?php
    include('header.php');
    
    ?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/gallery/9.jpg); background-size:cover; background-repeat:no-repeat;">
        <div class="auto-container">
            <h1>LOG IN TO DRIVE</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Login To Drive</li>
                </ul>
            </div>
        </div>

    <!--End Page Title-->
    
    <!--Contact Section -->
    <div class="contact-section">
    	 <div class="auto-container">
            <div class="row clearfix"> 
                
                <!--Map Side-->	
                <!-- <div class="map-column column col-lg-5 col-md-5 col-sm-12 col-xs-12"> -->
                    
					<!--Map Section-->
                    <!-- <section class="map-section">
                        <div class="map-outer"> -->
                            <!--Map Canvas-->
                            <!-- <div class="map-canvas"
                                data-zoom="12"
                                data-lat="24.939710117009298"
                                data-lng="67.04507674602438"			  
                                data-type="roadmap"
                                data-hue="#ffc400"
                                data-title="Aptech"
                                data-content=""							
                                style="height: 510px;">
                            </div>
                        </div> -->
                        <!--Map Content-->
                        <!-- <div class="map-content">
                        	<h3>Address</h3>
                            <div class="text">Karachi </div>
                            <a href="#" class="map-view">View Larger Map</a>
                        </div>
                    </section>
                    <ul class="contact-info">
                    	<li><span class="icon flaticon-technology-1"></span> +091 234 5678</li>
                        <li><span class="icon flaticon-envelope"></span> info@zagreb.com</li>
                    </ul>
                </div> -->
                
                <!--Form Column-->	
                <div class="form-column column col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                    	<div class="group-title">
                        	
                        <!--Contact Form-->
                       <form method="post" action="driver_loginAction.php" id="contact-form">
                            <div class="row clearfix">
                              
                                <div class="col-sm-12 form-group">
                                <label  for="">EMAIL:</label>
                                    <input type="email" name="d_email" placeholder="Enter Email *" required>
                                </div>

                                <div class="col-sm-12 form-group">
                                <label  for="">PASSWORD:</label>
                                    <input type="password" name="d_password" placeholder="Enter Password *" required>
                                </div>

                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit">SUBMIT</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    <!--End Contact Form -->
                    
                </div>
                
            </div>
        </div>
    </div>
    </section>
   
  <?php
  include('footer.php');
  ?>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!-- Google Map APi Key
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
End Google Map APi -->

</body>
</html>