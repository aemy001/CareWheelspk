<?php
session_start();
require ("connect.php");
if(isset($_POST["v_submit"])){
    
    $d_id = $_POST["d_id"];
    $vname = $_POST["v_name"];
    $vmodel = $_POST["v_model"];
    $vyear = $_POST["v_year"];
    $vcapacity = $_POST["v_capacity"];
    $vregNum = $_POST["v_regNum"];

    //path of image
    $upload_dir = "./admin/uploadimg/";
    //storing image name in a variable 
    $vdrvimg = $_FILES["v_drv_img"]["name"];
    $vcertimg = $_FILES["v_cert_img"]["name"];
    $vimg = $_FILES["v_img"]["name"];
    $vdrvlic = $_FILES["v_drv_lic"]["name"];

//using move upload function, for every image (tempname, image path)
    move_uploaded_file($_FILES["v_drv_img"]["tmp_name"], $upload_dir . $vdrvimg);
    move_uploaded_file($_FILES["v_cert_img"]["tmp_name"], $upload_dir . $vcertimg);
    move_uploaded_file($_FILES["v_img"]["tmp_name"], $upload_dir . $vimg);
    move_uploaded_file($_FILES["v_drv_lic"]["tmp_name"], $upload_dir . $vdrvlic);

    //inserting in db 
    $insert = "INSERT INTO `vehicles`(`v_name`, `v_model`, `v_year`, `v_capacity`, `v_regNum`,`d_id`, `v_drv_img`, `v_cert_img`, `v_img`, `v_drv_lic`) VALUES ('$vname','$vmodel','$vyear','$vcapacity','$vregNum','$d_id','$vdrvimg','$vcertimg','$vimg',' $vdrvlic')";

    $deliver = mysqli_query($conn , $insert);

    if($deliver){
        echo "<script>alert('Your Driver Request Is Pending, You Will Recieve an email after being approved');</script>";
       header('location:driver_login.php');
      exit;
    }



}


?>