<?php 
include '../../config.php';

$admin=new Admin();


$oid=$_GET['or_id'];



$st=$admin->cud("UPDATE `order` SET `or_status`='order delivered' WHERE `or_id`='$oid'","updated");

echo "<script>window.location='../manage_order.php';</script>";



?>