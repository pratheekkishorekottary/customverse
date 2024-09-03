<?php
include '../config.php';
$admin = new Admin();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

$stmt = $admin->ret("SELECT * FROM `voucher` WHERE `vr_title`='$name'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$num = $stmt->rowCount();
$amt=$row['vr_amount'];
if($num>0)
{
   
    echo "<script>alert('Voucher Added ');window.location='../cart.php?amt=".$amt."';</script>";
}else{
     echo "<script>alert('Voucher Invalid');window.location='../cart.php';</script>";
 } }
?>
