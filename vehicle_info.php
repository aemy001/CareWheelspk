<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>VEHICLE Sign Up</title>
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
    include("connect.php");
    ?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-2.jpg); background-size:cover; background-repeat:no-repeat;">
        <div class="auto-container">
            <h1>SIGN UP</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Sign Up</li>
                </ul>
            </div>
        </div>

    <!--End Page Title-->
    
    <!--Contact Section -->
    <div class="contact-section">
    	 <div class="auto-container">
            <div class="row clearfix"> 
   
                <?php

if (isset($_GET['d_id'])) {
    $d_id = $_GET['d_id'];
} else { 
    die("Driver ID not provided.");
}
?>
                <!--Form Column-->	
                <div class="form-column column col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                    	<div class="group-title">
                        	
                        <!--Contact Form-->
                       <form method="POST" action="vehicleinfoAction.php" id="contact-form" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-6 form-group">
                                    <label  for="">VEHICLE BRAND:</label>
                                    <input type="hidden" name="d_id" value="<?php echo $d_id;?>" />
                                    <input type="text" name="v_name"  placeholder="Enter Brand Name *" required>
                                </div>
                                
                                <div class="col-sm-6 form-group">
                                    <label  for="">MODEL NAME:</label>
                                    <input type="text" name="v_model" placeholder="Enter Model Name *" required>
                                </div>
                                
                                <div class="col-sm-6 form-group">
                                    <label  for="">YEAR:</label>
                                    <input type="tel" name="v_year" placeholder="Enter year *" required>
                                </div>


                                <div class="col-sm-12 form-group">
                                    <label for="">CAPACITY:</label>
                                    <input type="tel" name="v_capacity" placeholder="Enter Capacity *" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                <label  for="">REGISTRATION NUMBER:</label>
                                    <input type="text" name="v_regNum" placeholder="Enter Registration Number *" required>
                                </div>

                                <div class="col-sm-12 form-group">
                                <label  for="">UPLOAD YOUR IMAGE:</label>
                                    <input type="file" name="v_drv_img" accept="image/png, image/jpg, image/jpeg" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                <label  for="">UPLOAD YOUR CERTIFICATE OF VEHICLE REGISTRATION:</label>
                                    <input type="file" name="v_cert_img" accept="image/png, image/jpg, image/jpeg" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                <label  for="">UPLOAD YOUR VEHICLE IMAGE:</label>
                                    <input type="file" name="v_img" accept="image/png, image/jpg, image/jpeg" required>
                                </div>
                               
                                <div class="col-sm-12 form-group">
                                <label  for="">UPLOAD YOUR DRIVER'S LICENSE:</label>
                                    <input type="file" name="v_drv_lic" accept="image/png, image/jpg, image/jpeg" required>
                                </div>

                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="v_submit">SUBMIT</button>
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