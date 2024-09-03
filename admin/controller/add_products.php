<?php
include '../../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    
    $name=$_POST['p_name'];
    $description=$_POST['p_description'];
    $price=$_POST['p_price'];
    $category=$_POST['category'];
    $size=$_POST['var'];
    $size1=implode(",",$size);

    $image="upload/".basename($_FILES['p_image']['name']);
    move_uploaded_file($_FILES['p_image']['tmp_name'],$image);
 


   
    $stmt=$admin->cud("INSERT INTO `product`(`ct_id`,`p_name`,`p_description`,`p_price`,`p_image`,`size`)VALUES('$category','$name','$description','$price','$image','$size1')","inserted");
    echo "<script>alert('Product added');window.location='../add_products.php';</script>";
}
?>
