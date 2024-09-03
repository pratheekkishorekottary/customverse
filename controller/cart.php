<?php 
include '../config.php';
$admin=new Admin();
if(isset($_SESSION['u_id'])){
$u_id=$_SESSION['u_id'];
}
if(isset($_GET['cust_id'])){
   $cust_id=$_GET['cust_id'];
   $quantity=1;
   $stmt=$admin->ret("SELECT * FROM `customized_order` WHERE `cust_id`='$cust_id'");
   $p_row=$stmt->fetch(PDO::FETCH_ASSOC);
//    $num=$stmt->rowCount();
   $p_price=$p_row['price'];
   $cart_total=$quantity * $p_price;

   $stmt1=$admin->ret("SELECT * FROM `cart` WHERE `u_id`='$u_id' AND `cust_id`='$cust_id'");
   $cart_row=$stmt1->fetch(PDO::FETCH_ASSOC);
   $num=$stmt1->rowCount();
   if($num>0){
    $quantity_cart=$cart_row['cr_qty']+1;
    $stmt2=$admin->cud("UPDATE `cart` SET `cr_qty`='$quantity_cart' WHERE `u_id`='$u_id' AND `cust_id`='$cust_id'",'Updated');
    echo "<script>alert('item added to cart');window.location.href='../cart.php?cust_id=".$cust_id."';</script>";
   }else{
    $stmt3=$admin->cud("INSERT INTO `cart` (`u_id`,`cust_id`,`cr_qty`,`cr_added_date`)VALUES('$u_id','$cust_id','$quantity',now())",'inserted');
     echo "<script>alert('item added to cart');window.location.href='../cart.php';</script>";
   }
}


if(isset($_GET['p_id'])){
     $p_id=$_GET['p_id'];
    $quantity=1;
    $stmt=$admin->ret("SELECT * FROM `product` WHERE `p_id`='$p_id'");
    $p_row=$stmt->fetch(PDO::FETCH_ASSOC);
 //    $num=$stmt->rowCount();
    $p_price=$p_row['p_price'];
    $cart_total=$quantity * $p_price;
 
    $stmt1=$admin->ret("SELECT * FROM `cart` WHERE `u_id`='$u_id' AND `p_id`='$p_id'");
    $cart_row=$stmt1->fetch(PDO::FETCH_ASSOC);
    $num=$stmt1->rowCount();
    if($num>0){
     $quantity_cart=$cart_row['cr_qty']+1;
     $stmt2=$admin->cud("UPDATE `cart` SET `cr_qty`='$quantity_cart' WHERE `u_id`='$u_id' AND `p_id`='$p_id'",'Updated');
     echo "<script>alert('item added to cart');window.location.href='../cart.php';</script>";
    }else{
     $stmt3=$admin->cud("INSERT INTO `cart` (`u_id`,`p_id`,`cr_qty`,`cr_added_date`)VALUES('$u_id','$p_id','$quantity',now())",'inserted');
      echo "<script>alert('item added to cart');window.location.href='../cart.php';</script>";
    }
 }
?>