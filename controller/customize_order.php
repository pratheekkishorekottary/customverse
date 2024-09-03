<?php
include '../config.php';
$admin= new admin();

if(isset($_POST['addtocart'])){
    $ct_id=$_GET['ct_id'];
    $p_id=$_GET['p_id'];
    $description=$_POST['discript'];

    $u_id=$_SESSION['u_id'];
     $size=$_POST['size'];
    $price=$_POST['price'];

    $image="upload/".basename($_FILES['customize']['name']);
    move_uploaded_file($_FILES['customize']['tmp_name'],$image);
 


   
    $stmt=$admin->cud("INSERT INTO `customized_order`(`ct_id`,`p_id`,`cust_description`,`u_id`,`cust_image`,`cust_status`,`ct_size`,`price`)VALUES('$ct_id','$p_id','$description','$u_id','$image','Pending','$size','$price')","inserted");
    
  
     echo "<script>alert('Customization Request Sent');window.location='../my_order.php';</script>";
}
?>
