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
     <?php
     include 'sidebar.php';      
      
      ?>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
               
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
 
$sql1 = "SELECT SUM(price) AS total_earnings FROM booking";

$result1 = mysqli_query($conn,$sql1);
if ($result1) {
  $row = mysqli_fetch_assoc($result1);
  $totalSum = $row["total_earnings"];
} else {
  $totalSum = 0; 
}

echo "<h3>Total Earnings:<br> Rs." . $totalSum . "</h3>";
?>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
                $sql2 = "SELECT * FROM `booking`";

                $result2 = mysqli_query($conn,$sql2);

                $num_count2 = mysqli_num_rows($result2);          
                 echo "<h3>Ride Requests: " . $num_count2 . "</h3>" ;
               
               ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
 
$sql3 = "SELECT * FROM `booking` WHERE `status` = 'Cancelled'";

$result3 = mysqli_query($conn,$sql3);
$num_count3 = mysqli_num_rows($result3); 

echo "<h3>Rides Cancelled: " . $num_count3 . "</h3>";
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- Sale & Revenue End -->
            <div class="d-md-flex justify-content-center mb-2 mt-1 ms-4"><h2>Rides Requests</h2></div> 
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Booking Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Number</th>
      <th scope="col">Pickup Date</th>
      <th scope="col">Pickup Time</th>
      <th scope="col">Pickup Location</th>
      <th scope="col">Dropoff Location</th> 
      <th scope="col">Service Type</th> 
      <th scope="col">Status</th>
      <th scope="col">Manage Ride</th>
    </tr>
  </thead>

 
  <tbody>
  <?php 

  $bquery = "SELECT * FROM `booking` JOIN `customers_info` ON `booking`.`c_id` = `customers_info`.`c_id` JOIN `services` ON `booking`.`service_id`= `services`.`service_id`";
  $bresult = mysqli_query($conn,$bquery);
     while($row=mysqli_fetch_assoc($bresult))
     {
       ?>
    <tr>
   
      <th scope="row"><?php echo $row['booking_id'];?></th>
      <td><?php echo $row['c_firstname'];?></td>
      <td><?php echo $row['c_phone'];?></td>
      <td><?php echo $row['pickup_date'];?></td>
      <td><?php echo $row['pickup_time'];?></td>    
      <td><?php echo $row['pickup_location'];?></td>
      <td><?php echo $row['dropoff_location'];?></td>
      <td><?php echo $row['service_type'];?></td>
      <td><?php echo $row['status'];?></td>
      <input type="hidden" name="d_id" value="<?php echo $_SESSION['d_id']; ?>">
      <td>  <a name="submit" id="manage" class="btn btn-success" href="managerides.php?id=<?php echo $row["booking_id"];?>" role="button">Manage</a>  </td>

    </tr>
    <?php 
     }
       ?>
    
  </tbody>
  
</table>








          



<?php
require 'footer.php';
?>


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