<?php
session_start();
require 'connect.php';
if(isset($_POST["submit"])){
   
     $email = $_POST["email"];
     $password = $_POST["password"];

     $login = "SELECT * FROM customers_info WHERE c_email ='$email' && c_password ='$password'";
     $deliver = mysqli_query($conn , $login);
     $row = mysqli_fetch_assoc($deliver);
     $counnt = mysqli_num_rows($deliver);
     if($counnt >0){
      $_SESSION["c_id"] = $row["c_id"]; 
      $_SESSION["c_firstname"] = $row["c_firstname"]; 
      $_SESSION["c_lastname"] = $row["c_lastname"]; 
      $_SESSION["c_email"] = $row["c_email"]; 
      $_SESSION["c_password"] = $row["c_password"];
      
        header("location:booking.php");
     }

     else{
        echo "<script>alert('enter valid email and password')</script>";
   }

    
}



?>