<?php
ob_start();
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Care Wheels | Profile</title>
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
<style>
    label{
        color: white;
        
    }
    .container{
   margin-top: 60px;
   margin-bottom: 60px;
    }
    form{
        padding:30px;
    }
    button{
        margin-top: 20px;
    }
 
</style>
<body>

<div class="page-wrapper">
 	
    <?php
    include('header.php');
    if(isset($_GET["error"]) && $_GET["error"] === "ProfileDeleted"){
        echo "<script>alert('Your Account Has been deleted')</script>";
    }
    ?>

  <!--Page Title-->
  <section class="page-title" style="background-image:url(images/gallery/9.jpg); background-size:cover; background-repeat:no-repeat;">
        <div class="auto-container">
            <h1>EDIT PROFILE</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">EDIT PROFILE</li>
                </ul>
            </div>
        </div>

</section>  
<?php

$cust_id = $_GET['cust_id'];
        
$Dquery = "SELECT * FROM `customers_info` WHERE `c_id` = '$cust_id'";

$Dresult = mysqli_query($conn , $Dquery);

$row = mysqli_fetch_row($Dresult);

if(isset($_POST['update']))
{
 
 $firstname = $_POST["c_fname"];
 $lastname = $_POST["c_lname"];
 $number = $_POST["c_phone"];
 $address = $_POST["c_address"];
 $email = $_POST["c_email"];
 $password = $_POST["c_password"];

 $Rquery = "UPDATE `customers_info` SET `c_firstname`=' $firstname',`c_lastname`=' $lastname',`c_phone`='$number',`c_address`='$address' ,`c_email`='$email',`c_password`='$password' WHERE `c_id` = '$cust_id';";
 $Rresult = mysqli_query($conn,$Rquery);
 if($Rresult)
 {
     header('location:cust_profile.php');
 }

}
if(isset($_POST["delete"])){
$query= "DELETE FROM `customers_info` where `c_id` = '$cust_id'";
$result=mysqli_query($conn,$query);
if($result)
{
     header("location:cust_login.php?error=ProfileDeleted");
                                 exit;
                             }
                             else{
                                 echo "data cannot be deleted";
                             
                             }
}
?>


<div class="container">
<h2>EDIT YOUR PROFILE</h2>
    <form action="" method="POST">
    <div class="row">
    <div class="col-12 col-md-6">
                                    <label for="" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" name="c_fname" value="<?php echo $row['1'];?>" id="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="" class="form-label">last Name:</label>
                                    <input type="text" class="form-control" name="c_lname" value="<?php echo $row['2'];?>" id="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="" class="form-label">Phone Number:</label>
                                    <input type="number" class="form-control" name="c_phone" value="<?php echo $row['3'];?>" id="">
                                </div>
                              
                                <div class="col-12 col-md-6">
                                    <label for="" class="form-label">Address:</label>
                                    <input type="text" class="form-control" name="c_address" value="<?php echo $row['4'];?>" id="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="c_email" value="<?php echo $row['5'];?>" id="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="" class="form-label">Password:</label>
                                    <input type="password" class="form-control" name="c_password" value="<?php echo $row['6'];?>" id="">
                                </div>
                                <div class="col-12 col-md-2">
                                <button type="submit" name="update" class="btn btn-warning">Update Profile</button>
                                </div>
                                <div class="col-12 col-md-10">
                                <button type="submit" name="delete" class="btn btn-warning">Delete Your Account</button>
                                </div>
    </div>
                               
                               

</form>
</div>

















    </div>











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