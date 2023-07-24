<?php
    include('connect.php');

    $id = $_GET['id'];
    $query= "DELETE FROM `drivers` where `d_id` = '$id'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header('location:drv_req_pending.php');

    }
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }
?>