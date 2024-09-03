<?php
include '../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
   
    $u_name=$_POST['u_name'];
    $u_email=$_POST['u_email'];
    $u_phone=$_POST['u_phone'];
    $u_password=$_POST['u_password'];
    $u_address=$_POST['u_address'];
    $u_city=$_POST['u_city'];
    $u_state=$_POST['u_state'];
    $u_pin=$_POST['u_pin'];

    $stmt=$admin->cud("INSERT INTO `customer`(`u_name`,`u_email`,`u_phone`,`u_password`,`u_address`,`u_created_date`,`u_city`,`u_state`,`u_pin`,`u_status`)
    VALUES('$u_name','$u_email','$u_phone','$u_password','$u_address',now(),'$u_city','$u_state','$u_pin','pending')","inserted");
    echo "<script>alert('registered');window.location='../login.php';</script>";
}
?>