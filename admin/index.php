<?php
ob_start();
session_start();
include("connect.php");
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
    <div class="container-fluid position-relative d-flex p-0">
     <?php
     include 'sidebar.php';
     


          
      
      ?>
       


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
                $query1 = "SELECT * FROM `drivers` WHERE d_status = 'pending'";

                $result1 = mysqli_query($conn,$query1);

                $num_count1 = mysqli_num_rows($result1);          
                 echo "<h4>Pending Drivers: " . $num_count1 . "</h4>" ;
               
               ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
                $query2 = "SELECT * FROM `customers_info`";

                $result2 = mysqli_query($conn,$query2);

                $num_count2 = mysqli_num_rows($result2);          
                 echo "<h4>Total Customers: " . $num_count2 . "</h4>" ;
               
               ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                        <?php
                    $query2 = "SELECT * FROM `drivers` WHERE d_status = 'approved'";

$result2 = mysqli_query($conn,$query2);

$num_count2 = mysqli_num_rows($result2);          
 echo "<h4>Approved Drivers: " . $num_count2 . "</h4>" ;

?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php
                $query3 = "SELECT * FROM `booking`";

                $result3 = mysqli_query($conn,$query3);

                $num_count3 = mysqli_num_rows($result3);          
                 echo "<h4>Ride Requests: " . $num_count3 . "</h4>" ;
               
               ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


          


            <!-- Recent Drivers Start -->
            <?php
            $cquery = "SELECT * FROM `drivers` ORDER BY `d_id` DESC LIMIT 1";
$cresult = mysqli_query($conn,$cquery);
?>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5 class="mb-0">Recent Drivers</h5>
                        <a href="drv_req_pending.php">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th> 
                                    
                                </tr>
                            </thead>
                            <tbody>
                                     <?php 
                                          while($row=mysqli_fetch_assoc($cresult))
                                           {
                                     ?>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?php echo $row['d_id'];?></td>
                                    <td><?php echo $row['d_fname'];?></td>
                                    <td><?php echo $row['d_lname'];?></td>
                                    <td><?php echo $row['d_phone'];?></td>    
                                    <td><?php echo $row['d_address'];?></td>
                                    <td><?php echo $row['d_email'];?></td>
                                
                                </tr>
                                <?php 
                                      }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Drivers End -->
            <?php
            $cquery = "SELECT * FROM `customers_info` ORDER BY `c_id` DESC LIMIT 5";
$cresult = mysqli_query($conn,$cquery);
?>
 <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h5 class="mb-0">Recent Customers</h5>
                        <a href="customer_view.php">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th> 
                                    
                                </tr>
                            </thead>
                            <tbody>
                                     <?php 
                                          while($row=mysqli_fetch_assoc($cresult))
                                           {
                                     ?>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?php echo $row['c_id'];?></td>
                                    <td><?php echo $row['c_firstname'];?></td>
                                    <td><?php echo $row['c_lastname'];?></td>
                                    <td><?php echo $row['c_phone'];?></td>    
                                    <td><?php echo $row['c_address'];?></td>
                                    <td><?php echo $row['c_email'];?></td>
                                
                                </tr>
                                <?php 
                                      }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            

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
    header("location:signin.php");
}

?>