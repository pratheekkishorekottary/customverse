<?php


// session_unset($_SESSION['u_id']);

session_start();
session_destroy();

header('Location:../login.php');


// echo
// "<script>
// alert('logout successfully');
// window.location='../login.php';
// </script>";
?>