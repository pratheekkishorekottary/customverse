<?php 
include '../../config.php';

$admin=new Admin();

$id=$_GET['ct_id'];
$stmt=$admin->cud("DELETE FROM `category` WHERE `ct_id`='$id'","deleted");

echo "<script>alert('Deleted succesfully.....');window.location='../add_category.php';</script>";

?>
