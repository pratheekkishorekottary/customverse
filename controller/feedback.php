<?php 

include '../config.php';

$admin=new Admin();

if(isset($_POST['submit'])){
$u_id=$_SESSION['u_id'];
	$discrip=$_POST['discript'];
	
	$or_id=$_GET['or_id'];



	$stmt=$admin->cud("INSERT INTO `feedback` (`f_description`,`or_id`,`u_id`,`f_date`) VALUES ('$discrip','$or_id','$u_id',now())","saved");

	echo "<script>alert('Sent successfully.....');window.location='../my_order1.php';</script>";

}

?>