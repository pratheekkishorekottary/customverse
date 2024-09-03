<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['checkout'])){
    $u_id=$_SESSION['u_id'];
  $cust_id=$_GET['cust_id'];
  $total=$_GET['total'];
    $stmt=$admin->ret("SELECT * FROM  `customized_order`   WHERE   `cust_id`='$cust_id' ");
    $un=uniqid();
   
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    // $cid=$row['cid'];
   

    $g_total=0;
    // $s_qty=$row['quantity'];

    $status='pending';
   
    $stmt1=$admin->rcud("INSERT INTO `order` (`u_id`,`or_total_amount`,`or_date`,`or_status`,`cust_id`)VALUES('$u_id','$total','$status',now(),'$cust_id')");
   

    $name=$_POST['name'];
   
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['number'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $stmt2=$admin->cud("INSERT INTO `shipping` (`or_id`,`u_id`,`s_name`,`s_email`,`s_phone`,`s_address`,`s_city`,`s_state`,`s_pin`,`s_date`)VALUES('$stmt1','$u_id','$name','$email','$phone','$address','$city','$state','$zip',now())",'INSERTED');

    $stmt4=$admin->ret("SELECT * FROM `order` WHERE `or_id`='$stmt1'");
    $row4=$stmt4->fetch(PDO::FETCH_ASSOC);
    $or_id=$row4['or_id'];
    $trans_id=$_POST['trans_id'];
    $pay_type=$_POST['paymentMethod'];
    $card_name=$_POST['card_name'];
    $card_no=$_POST['card_no'];
    $cvv=$_POST['cvv'];
    $pay_status='pending';
    $stmt3=$admin->cud("INSERT INTO `payment` (`u_id`,`pt_date`,`or_id`,`pt_mode`,`pt_transaction_id`,`pt_card_name`,`pt_card_number`,`cvv`,`pt_status`)VALUES('$u_id','$or_id','$pay_type','$trans_id','$card_name','$card_no','$cvv',now(),'$pay_status')",'INSERTED');
     echo "<script>alert('Thank you for ordering');window.location='../feedback.php?or_id=$or_id';</script>";

   }
    // $stmt6=$admin->cud("DELETE FROM `cart` WHERE `cus_id`='$cus_id'",'DELETED');
    // echo "<script>alert('Thank you for ordering ');window.location='../feedback.php';</script>";
}
?>