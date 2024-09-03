<?php 
include '../config.php';
$admin=new Admin();
$or_id=$_GET['or_id'];
$stmt=$admin->cud("DELETE FROM `order` WHERE `or_id`='$or_id' ",'DELETED');
echo "<script>alert('Order Canceled Succesfully');window.location='../my_order1.php';</script>";
?>