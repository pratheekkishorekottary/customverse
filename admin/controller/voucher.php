<?php
include '../../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $amt=$_POST['amt'];
   


   
    $stmt=$admin->cud("INSERT INTO `voucher`(`vr_title`,`vr_amount`)VALUES('$name','$amt')","inserted");
    echo "<script>alert('Voucher added');window.location='../voucher.php';</script>";
}
?>
