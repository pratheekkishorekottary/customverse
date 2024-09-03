<?php 
include '../../config.php';

$admin=new Admin();

$id=$_GET['p_id'];
$stmt=$admin->cud("DELETE FROM `product` WHERE `p_id`='$id'","deleted");

echo "<script>alert('Deleted succesfully.....');window.location='../view_products.php';</script>";

?>
