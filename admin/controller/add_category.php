<?php
include '../../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    $name=$_POST['ct_name'];
   


   
    $stmt=$admin->cud("INSERT INTO `category`(`ct_name`)VALUES('$name')","inserted");
    echo "<script>alert('Category added');window.location='../add_category.php';</script>";
}
?>
