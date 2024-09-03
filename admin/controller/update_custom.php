<?php
include '../../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    $cust_id=$_GET['cust_id'];
   
    $price=$_POST['price'];
    $category=$_POST['select'];
  
 


   
    $stmt=$admin->cud("UPDATE `customized_order` SET `cust_status`='$category',`price`='$price' where `cust_id`='$cust_id' ","inserted");
    echo "<script>alert('Product Updated');window.location='../view_custom_request.php';</script>";
}
?>
