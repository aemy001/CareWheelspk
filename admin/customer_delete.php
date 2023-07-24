<?php
    include('connect.php');

    $id = $_GET['id'];
    $query= "DELETE FROM `customers_info` where `c_id` = '$id'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header('location:customer_view.php');

    }
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }
?>