<?php
session_start();
require 'connect.php';
if(isset($_POST["submit"])){

     $email = $_POST["d_email"];
     $password = $_POST["d_password"];
     $login = "SELECT * FROM drivers WHERE d_email ='$email' && d_password = '".md5($password)."' && d_status = 'Approved'";
     $deliver = mysqli_query($conn , $login);
     $row = mysqli_fetch_assoc($deliver);
     $count = mysqli_num_rows($deliver);
     if($count >0){
      $_SESSION["d_id"] = $row["d_id"]; 
      $_SESSION["d_fname"] = $row["d_fname"]; 
      $_SESSION["d_lname"] = $row["d_lname"]; 
      $_SESSION["d_email"] = $row["d_email"]; 
      $_SESSION["d_password"] = $row["d_password"];
      
        header("location:admin/driverboard.php");
     }

     else{
        echo "<script>alert('enter valid email and password or you are not accepted as a driver yet')</script>";
   }

    
}



?>