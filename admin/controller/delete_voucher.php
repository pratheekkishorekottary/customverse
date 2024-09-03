<?php 
include '../../config.php';

$admin=new Admin();

$id=$_GET['vr_id'];
$stmt=$admin->cud("DELETE FROM `voucher` WHERE `vr_id`='$id'","deleted");

echo "<script>alert('Deleted succesfully.....');window.location='../voucher.php';</script>";

?>
