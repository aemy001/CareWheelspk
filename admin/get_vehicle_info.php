<!DOCTYPE html>
<?php
ob_start();
require("connect.php");
session_start();
if($_SESSION["a_email"]){
?>
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
    <style>
        .card{
            padding: 20px;
        }
        .row{
            width: 80%;
        }
    
    </style>
</head>

<body>

<div class="page-wrapper">

      <?php
      include('sidebar.php');




   if (isset($_GET['d_id'])) {
$d_id = $_GET['d_id'];
$vquery = "SELECT * FROM drivers JOIN vehicles ON drivers.d_id = vehicles.d_id  WHERE drivers.d_id = $d_id ORDER BY vehicles.d_id";
$vresult = mysqli_query($conn,$vquery);     
$num_result = mysqli_num_rows($vresult);
?>

<?php
for($i=0; $i<$num_result; $i++){
$row = mysqli_fetch_assoc($vresult);
?>

<h2 class="card-title row justify-content-center mt-3">Driver Vehicle information</h2>
<div class="card bg-dark">
<div class="card-body row border border-5 border-danger ms-5">
<div class="col-md-4">
<input type="hidden" name="d_id" value="<?php echo $d_id;?>" />
<p class="lead">Driver Name: <?php echo $row['d_fname'];?></p>
<p class="lead" >Driver Phone: <?php echo $row['d_phone'];?></p> 
<p class="lead">Driver Cnic: <?php echo $row['CNIC'];?></p>
<p class="lead">Driver Email: <?php echo $row['d_email'];?></p>
<p class="lead">Driver Address: <?php echo $row['d_address'];?></p>
<p class="lead">Driver Status: <?php echo $row['d_status'];?></p>
<p class="lead">Vehicle Name: <?php echo $row['v_name'];?></p>
<p class="lead">Vehicle Model: <?php echo $row['v_model'];?></p>
<p class="lead">Vehicle Year: <?php echo $row['v_year'];?></p>
<p class="lead">Vehicle Capacity: <?php echo $row['v_capacity'];?></p>
<p class="lead">Vehicle Registration no: <?php echo $row['v_regNum'];?></p>
</div>

<div class="col-md-4">
    <div class="mt-4">
        <p>Vehicle Image:</p>
    <img class="image-fluid" src="uploadimg/<?php echo $row["v_img"];?>" width=75%>
    </div>
    <div class="mt-4">
    <p>Vehicle Certificate:</p><img class="image-fluid" src="uploadimg/<?php echo $row["v_cert_img"];?>" width=75%></div>
  
    </div>

    <div class="col-md-4">
    <div class="mt-4"><p>Driver Image:</p><img class="image-fluid" src="uploadimg/<?php echo $row["v_drv_img"];?>" width=75%></div>
   <div class="mt-4"><p>Driver's License:</p> <img class="image-fluid" src="uploadimg/<?php echo $row["v_drv_lic"];?>" width=75%></div>
    </div>
</div> 
</div>

<?php
}
}
?>
<form action="d_approvalAction.php" method="post">
<div class="d-flex justify-content-center">
<a
    name="submit"
    class="btn btn-danger"
    href="d_approvalAction.php?d_id=<?php echo $row["d_id"]; ?>"
    role="button"
  >Approve this Driver</a> 
</div>
</form>

     
















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