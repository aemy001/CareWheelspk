<!DOCTYPE html>

<?php
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
</head>

<body>

<div class="page-wrapper">
<?php
include('sidebar.php');

?>
  
   <div class="d-md-flex justify-content-center mb-2 mt-1 ms-4"><h2>Customer Information</h2></div> 
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th> 
      <th scope="col">Action</th>
      
    </tr>
  </thead>

 
  <tbody>
  <?php 
  $cquery = "SELECT * FROM `customers_info`";
  $cresult = mysqli_query($conn,$cquery);
  
     while($row=mysqli_fetch_assoc($cresult))
     {
       ?>
    <tr>
   
      <th scope="row"><?php echo $row['c_id'];?></th>
      <td><?php echo $row['c_firstname'];?></td>
      <td><?php echo $row['c_lastname'];?></td>
      <td><?php echo $row['c_phone'];?></td>    
      <td><?php echo $row['c_address'];?></td>
      <td><?php echo $row['c_email'];?></td>
      <td><a name="update" id="update" class="btn btn-success" href="customer_update.php?id=<?php echo $row["c_id"]?>" role="button">Update</a>  </td>
      <td><a name="delete" id="delete" class="btn btn-danger" href="customer_delete.php?id=<?php echo $row["c_id"]?>" role="button">Delete</a>  </td>
    
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