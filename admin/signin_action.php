<?php
session_start();
include 'connect.php';
if(isset($_POST["submit"])){
   
     $email = $_POST["email"];
     $password = $_POST["password"];

     $login = "SELECT * FROM admin WHERE a_email ='$email' && a_password ='$password'";
     $deliver = mysqli_query($conn , $login);
     $row = mysqli_fetch_assoc($deliver);
     $counnt = mysqli_num_rows($deliver);
     if($counnt >0){

      $_SESSION["a_id"] = $row["a_id"]; 
      $_SESSION["a_username"] = $row["a_username"]; 
      $_SESSION["a_email"] = $row["a_email"]; 
      $_SESSION["a_password"] = $row["a_password"]; 
        header("location:index.php");
     }

     else{
        echo "<script>alert('enter valid email and password')</script>";
   }

    
}



?>