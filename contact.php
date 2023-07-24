<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Zagreb HTML Template | Contact Us</title>
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

<div class="page-wrapper">
 	
    <?php
    require('header.php');
    
    ?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <h1>CONTACT US</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.php">Home</a></li>
                    <li class="active">CONTACT US</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section -->
    <div class="contact-section">
    	<div class="auto-container">
            <div class="row clearfix">
                
                <!--Map Side-->	
                <div class="map-column column col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    
					<!--Map Section-->
                    <section class="map-section">
                        <div class="map-outer">
                            <!--Map Canvas-->
                            <div class="map-canvas"
                                data-zoom="12"
                                data-lat="24.939710117009298"
                                data-lng="67.04507674602438"			  
                                data-type="roadmap"
                                data-hue="#ffc400"
                                data-title="Aptech"
                                data-content=""							
                                style="height: 510px;">
                            </div>
                        </div>
                        <!--Map Content-->
                        <div class="map-content">
                        	<h3>Address</h3>
                            <div class="text">Karachi </div>
                            <a href="#" class="map-view">View Larger Map</a>
                        </div>
                    </section>
                    <ul class="contact-info">
                    	<li><span class="icon flaticon-technology-1"></span> +091 234 5678</li>
                        <li><span class="icon flaticon-envelope"></span> info@zagreb.com</li>
                    </ul>
                </div>
                
                <!--Form Column-->	
                <div class="form-column column col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                    	<div class="group-title">
                        	<h3>DROP US A LINE</h3>
                            <div class="text">Sicut malus voodoo. Aenean a dolor vulnerum aperire accedunt, mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis.</div>
                        </div>
                        <!--Contact Form-->
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Name *">
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email *">
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject *">
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">SUBMIT</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    <!--End Contact Form -->
                    
                </div>
                
            </div>
        </div>
    </div>
  <?php
  require('footer.php');
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

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>