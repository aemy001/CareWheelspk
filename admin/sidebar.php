<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
      <!-- Spinner Start -->
  <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>CareWheels</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                
                    <div class="ms-3">
                        <h4>Welcome!! </h4>
                        <h4><span> <?php 
                             if (isset($_SESSION['a_email']) || $_SESSION['d_email'] == 1) {
                                 echo $_SESSION["a_username"];
                             } else if (isset($_SESSION['d_email'])) {
                                 echo  $_SESSION["d_fname"]; 
                             }
                             ?>
                           </span></h4>
                    </div>
                </div>
                <?php
                if (isset($_SESSION['a_email']) || $_SESSION['d_email'] == 1) { ?>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link">Dashboard</a>
                    <br>
                    <a href="drv_req_pending.php" class="nav-item nav-link">Drivers Request</a>
                    <br>
                    <a href="customer_view.php" class="nav-item nav-link">Customer Info</a>
                    <br>
                    <a href="ridesbook_view.php" class="nav-item nav-link">Rides Booking</a>
                    <br>
                    <a href="feedbackview.php" class="nav-item nav-link">Customer's Feedback</a>
                    <br>
                    <a href="contactusview.php" class="nav-item nav-link">Contact Us</a>
                    <br>
                    <div class="nav-item">
                       
                            <a href="new_admin_signup.php" class="dropdown-item">Create New Admin</a>
                         
                    </div>
                </div>
                <?php } else if (isset($_SESSION['d_email'])) { ?>
                    <div class="navbar-nav w-100">
                    <a href="driverboard.php" class="nav-item nav-link">Rides Requests</a>
                    <br>
                    <a href="drivermyrides.php" class="nav-item nav-link">My Rides</a>
                    <br>
                </div>
                <?php }?>
            </nav>
        </div>
        <!-- Sidebar End -->
         <!-- Content Start -->
         <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                          
                            <span class="d-none d-lg-inline-flex">
                             <?php 
                             if (isset($_SESSION['a_email']) || $_SESSION['d_email'] == 1) {
                                 echo $_SESSION['a_username'];
                             } else if (isset($_SESSION['d_email'])) {
                                 echo $_SESSION['d_fname'];
                             }
                             ?>
                                </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
</body>
</html>