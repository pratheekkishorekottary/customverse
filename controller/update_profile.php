<?php
include '../config.php';
$admin= new admin();
$uid=$_SESSION['u_id'];
if(isset($_POST['submit'])){
    $u_name=$_POST['u_name'];
    $u_email=$_POST['u_email'];
    $u_phone=$_POST['u_phone'];
    $u_password=$_POST['u_password'];
    $u_address=$_POST['u_address'];

    $image="upload/".basename($_FILES['u_profile']['name']);
    move_uploaded_file($_FILES['u_profile']['tmp_name'],$image);
  
    $stmt=$admin->cud("UPDATE `customer` SET `u_name`=' $u_name',`u_email`='$u_email',`u_phone`='$u_phone',`u_password`='$u_password',`u_address`='$u_address',`u_profile`='$image' where `u_id`='$uid'","updated");
    echo "<script>alert('Profile Updated');window.location='../profile.php';</script>";
}
?>

