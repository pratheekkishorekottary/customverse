<?php 
include '../config.php';
$admin=new Admin();
$cid=$_GET['cr_id'];
$stmt=$admin->cud("DELETE  FROM `cart` WHERE  `cr_id`='$cid'",'DELETED');
echo "<script>alert('Item deleted Successfully');window.location='../cart.php';</script>";
?>