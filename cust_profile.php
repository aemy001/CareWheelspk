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
    table{
        padding: 30px;
    }
 
</style>
<body>

<div class="page-wrapper">
 	
    <?php
    include('header.php');
    ?>

  <!--Page Title-->
  <section class="page-title" style="background-image:url(images/gallery/9.jpg); background-size:cover; background-repeat:no-repeat;">
        <div class="auto-container">
            <h1>PROFILE</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">PROFILE</li>
                </ul>
            </div>
        </div>

</section>  

<?php
$c_id =  $_SESSION["c_id"];
$query = "SELECT * FROM `booking` JOIN `customers_info` ON booking.c_id = customers_info.c_id WHERE booking.c_id = '$c_id' ORDER BY `pickup_date` DESC;";
$result = mysqli_query($conn,$query); 
?>
<div class="container">
<div class="row">
    <div class="col-md-8">
  <div class="text-center">
  <h3>Rides history</h3> 
  </div>

    <table class="table table-hover table-bordered">
<thead>
    <tr>
      <th scope="col">Pickup Date</th>
      <th scope="col">Pickup Time</th>
      <th scope="col">Pickup Location</th>
      <th scope="col">Dropoff Location</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
 

  <tbody>
  <?php
while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
      <td><?php echo $row['pickup_date'];?></td>
      <td><?php echo $row['pickup_time'];?></td>
      <td><?php echo $row['pickup_location'];?></td>
      <td><?php echo $row['dropoff_location'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><?php echo $row['price'];?></td>
    </tr>
    <?php }?>
    </tbody>
    

</table>
    </div>
<div class="col-md-4">
<div class="text-center">
<h3>Your Information:</h3> 
</div>
<div class="text-right">
    <?php
     $query2 = "SELECT * FROM customers_info WHERE c_id = '$c_id'";
     $deliver = mysqli_query($conn ,$query2);
    ?>
<strong>  <h5>  <a class="link-success" href="cust_profiledit.php?cust_id=<?php echo $_SESSION["c_id"]; ?>">Edit Profile</a></h5>
</strong> 
</div>
<div class="text-right">
<h5><a class="link-success" href="cust_logout.php">Logout</a></h5>
</div>
<div class="text-center">
    <?php while($row = mysqli_fetch_assoc($deliver)){ ?>
<p><strong>First Name:  <?php echo $row["c_firstname"];?></strong></p>
  <p><strong>Last Name: <?php echo $row["c_lastname"];?></strong></p>
  <p><strong>Email:  <?php echo $row["c_email"];?></strong></p>
  <p><strong>Phone Number:   <?php echo $row["c_phone"];?></strong></p>
  <p><strong>Address:   <?php echo $row["c_address"];?></strong></p>
  <?php }?>
</div>

 </div>




</div>
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