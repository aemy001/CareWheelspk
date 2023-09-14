<?php
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
    <style>
      table{
        margin-top: 25px;
      }
    </style>
</head>

<body>

<div class="page-wrapper">
<?php
include('sidebar.php');
$query = "SELECT * FROM drivers JOIN vehicles ON drivers.d_id = vehicles.d_id ORDER BY drivers.d_id DESC";
$result = mysqli_query($conn,$query);        
      
      ?>
      <h3 class="container row justify-content-center">DRIVERS INFO</h3>
      <br>
    
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Cnic No</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th> 
      <th scope="col">Password</th>
      <th scope="col">Status</th>
      <th scope="col">Vehicle Info</th>
      <th scope="col-lg-3">Action</th>
    </tr>
  </thead>

 
  <tbody>
  <?php 
     while($row=mysqli_fetch_assoc($result))
     {
       ?>
    <tr>
      <td><?php echo $row['d_fname'];?></td>
      <td><?php echo $row['d_lname'];?></td>
      <td><?php echo $row['d_phone'];?></td>    
      <td><?php echo $row['CNIC'];?></td>  
      <td><?php echo $row['d_address'];?></td>
      <td><?php echo $row['d_email'];?></td>
      <td><?php echo $row['d_password'];?></td>
      <td><button class = "btn btn-success"><?php echo $row['d_status'];?></button></td>
      <td>  
       <button class="btn btn-secondary"> <a name="checkVinfo" id="checkVinfo" 
        class="btn btn-link btn-open-vehicle-modal" 
        href="get_vehicle_info.php?d_id=<?php echo $row["d_id"]; ?>" 
        role="button">Check vehicle info</a></button></td>
      <td>  <a name="approved" id="update" class="btn btn-success" href="driver_update.php?id=<?php echo $row["d_id"]?>" role="button">Update</a>  </td>
      <td>  <a name="delete" id="delete" class="btn btn-danger" href="delete_driver.php?id=<?php echo $row["d_id"]?>" role="button">Delete</a>  </td>
    
    </tr>
    <?php 
     }
       ?>
    
  </tbody>
  
</table>
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