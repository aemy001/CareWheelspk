<?php
ob_start();
include("connect.php");
session_start();
if($_SESSION["d_email"]){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DRIVER RIDES</title>
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
    <div class="container-fluid position-relative d-flex p-0">
     <?php include 'sidebar.php';?>
<?php
$booking_id = $_GET['id'];
$bquery = "SELECT * FROM `booking` WHERE `booking_id`= '$booking_id'";
$bresult = mysqli_query($conn, $bquery);
$row = mysqli_fetch_row($bresult);

if(isset($_POST["submit"])){
     $driver_id = $_POST["d_id"];
     $price= $_POST["price"];
     $status = $_POST["status"];

$update = "UPDATE `booking` SET `price` = '$price', `d_id` = '$driver_id', `status` = '$status' WHERE `booking_id`='$booking_id';";
$result = mysqli_query($conn,$update);
if($result){
    header("location:driverboard.php");
}
}

?>


<div class="container-fluid pt-4 px-4">
                <div class="row">
<div class="col-lg-12 col-xl-8">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Manage Ride</h6>
                            <form method="POST" action="">
                                <div class="mb-3">
                                <label for="" class="form-label">Pickup Date</label>
                                    <p><?php echo $row['1'];?></p>
                                </div>
                                <div class="mb-3">
                                <label for="" class="form-label">Pickup Time</label>
                                    <p><?php echo $row['2'];?></p>
                                    <input type="hidden" name="d_id" value="<?php echo $_SESSION['d_id'];?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Set Price:</label>
                                    <input type="number" class="form-control" name="price" value="<?php echo $row['6'];?>" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Ride Status:</label>
                                    <select name="status" value="<?php echo $row['11'];?>" id="">
                                    <option value=" ">  </option>
                                     <option value="Started">Ride Started</option>
                                     <option value="Completed">Ride Completed</option>
                                     <option value="Cancelled">Ride Cancelled</option>
                                    </select>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Update Ride</button>

</form>
</div></div></div></div>














<?php include 'footer.php';?>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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
<?php } 

else{
    header("location:driver_login.php");
}

?>