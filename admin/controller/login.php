<?php
include '../../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    $name=$_POST['a_name'];
    $password=$_POST['a_password'];

    $stmt=$admin->ret("SELECT*FROM `admin` WHERE `a_name` ='$name'  and `a_password`='$password'");
    $num=$stmt->rowCount();
    if($num>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
           $_SESSION['a_id']=$row['a_id'];
         echo "<script>alert('login Successfull ');window.location='../index.php';</script>";
     }else{
         echo "<script>alert('You Have Entered Wrong Password');window.location='../sign-in.php';</script>";
    }
}
?>