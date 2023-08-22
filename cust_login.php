<?php
ob_start();
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>CareWheels | Log In to Ride</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
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
            <h1>LOGIN To Ride</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">LogIn To Ride</li>
                </ul>
            </div>
        </div>

    <!--End Page Title-->
    
    <!--Contact Section -->
    <div class="contact-section">
    	 <div class="auto-container">
            <div class="row clearfix"> 
            <?php

if(isset($_POST["submit"])){
   
     $email = $_POST["email"];
     $password = $_POST["password"];

     $login = "SELECT * FROM customers_info WHERE c_email ='$email' && c_password ='".md5($password)."'";
     $deliver = mysqli_query($conn ,$login);
     $row = mysqli_fetch_assoc($deliver);
     $counnt = mysqli_num_rows($deliver);
     if($counnt >0){
      $_SESSION["c_id"] = $row["c_id"]; 
      $_SESSION["c_firstname"] = $row["c_firstname"]; 
      $_SESSION["c_lastname"] = $row["c_lastname"]; 
      $_SESSION["c_phone"] = $row["c_phone"]; 
      $_SESSION["c_address"] = $row["c_address"]; 
      $_SESSION["c_email"] = $row["c_email"]; 
      $_SESSION["c_password"] = $row["c_password"];
      header("location:cust_profile.php");
     }

     else{
        echo "<script>alert('enter valid email and password')</script>";
   }   
}
?>
                <!--Form Column-->	
                <div class="form-column column col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                    	<div class="group-title">
                        	
                        <!--Contact Form-->
                       <form method="post" action="" id="contact-form">
                            <div class="row clearfix">
                              
                                
                                <div class="col-sm-12 form-group">
                                <label  for="">EMAIL:</label>
                                    <input type="email" name="email" placeholder="Enter Email *" required>
                                </div>

                                <div class="col-sm-12 form-group">
                                <label  for="">PASSWORD:</label>
                                    <input type="password" name="password" placeholder="Enter Password *" required>
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