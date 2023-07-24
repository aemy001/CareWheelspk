<?php
ob_start();
require("connect.php");
session_start();
if($_SESSION["a_email"]){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">

<?php
include("sidebar.php");
?>

<?php

$id = $_GET['id'];
        
$Dquery = "SELECT * FROM `customers_info` WHERE `c_id` = '$id'";

$Dresult = mysqli_query($conn , $Dquery);

$row = mysqli_fetch_row($Dresult);

if(isset($_POST['update']))
{
 //    $order_id = $_POST['order_id'];
 $firstname = $_POST["c_fname"];
 $lastname = $_POST["c_lname"];
 $number = $_POST["c_phone"];
 $address = $_POST["c_address"];
 $email = $_POST["c_email"];
 $password = $_POST["c_password"];

 $Rquery = "UPDATE `customers_info` SET `c_firstname`=' $firstname',`c_lastname`=' $lastname',`c_phone`='$number',`c_address`='$address' ,`c_email`='$email',`c_password`='$password' WHERE `c_id` = '$id';";
 $Rresult = mysqli_query($conn,$Rquery);
 if($Rresult)
 {
     header('location:customer_view.php');
 }

}

?>







<div class="container-fluid pt-4 px-4">
                <div class="row">
<div class="col-lg-12 col-xl-8">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Update Form</h6>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" name="c_fname" value="<?php echo $row['1'];?>" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">last Name:</label>
                                    <input type="text" class="form-control" name="c_lname" value="<?php echo $row['2'];?>" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Phone Number:</label>
                                    <input type="number" class="form-control" name="c_phone" value="<?php echo $row['3'];?>" id="">
                                </div>
                              
                                <div class="mb-3">
                                    <label for="" class="form-label">Address:</label>
                                    <input type="text" class="form-control" name="c_address" value="<?php echo $row['4'];?>" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="c_email" value="<?php echo $row['5'];?>" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password:</label>
                                    <input type="password" class="form-control" name="c_password" value="<?php echo $row['6'];?>" id="">
                                </div>
                               
                                <button type="submit" name="update" class="btn btn-primary">Update Customer</button>
                            </form>
                        </div>
                    </div>



                    </div>
                    </div>








</div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php
include('footer.php');
?>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
}
else{
    header("location:signin.php");

}
?>