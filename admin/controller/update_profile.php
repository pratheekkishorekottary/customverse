<?php
include '../../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    $name=$_POST['a_name'];
    $email=$_POST['a_email'];
    $password=$_POST['confirm_password'];
   
    $image="upload/".basename($_FILES['a_profile']['name']);
    move_uploaded_file($_FILES['a_profile']['tmp_name'],$image);
 

    $stmt=$admin->cud("UPDATE `admin` SET `a_name`='$name',`a_email`='$email',`a_password`='$password',`a_profile`='$image'","updated");
    echo "<script>alert('Profile Updated');window.location='../profile.php';</script>";
}
?>

