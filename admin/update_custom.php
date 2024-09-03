<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php 
include "../config.php";
$admin=new Admin();
if(!isset($_SESSION['a_id'])){
   header('location:sign-in.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href=" assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href=" assets/img/favicon.png">
  <title>
  Custom Verse | Update Order
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href=" assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href=" assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href=" assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href=" assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>
<body style="background-image: url('../images2/3.jpg'); background-size: cover;">
 <?php include "sidebar.php"?>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Update</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Update Requests</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Requests</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          
        </div>
      </div>
    </nav>
    <div class= "card">
    <div class="container-fluid py-4">
      <div class="row">
      <?php 
                        $cust_id=$_GET['cust_id'];
                        $stmt=$admin->ret(" SELECT * FROM `customized_order`inner join `product` on customized_order.p_id=product.p_id where `cust_id`='$cust_id'");
                       $row=$stmt->fetch(PDO::FETCH_ASSOC);

                        ?>
        <form action="controller/update_custom.php?cust_id=<?php echo $cust_id;?>" method="post">
          <div class="form-group">
          <label for="exampleInputPassword1">Design image</label>
           <div>
            <img src="../controller/<?php echo $row['cust_image'] ?>" class="avatar avatar-sm me-3" alt="user1">
          </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><p class="text-xs font-weight-bold mb-0"><?php echo $row['cust_date'] ?></p></label>
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Product Name:</label>
            <div>
            <?php echo $row['p_name'] ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputPassword1" value="<?php echo $row['p_price'] ?>" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Size:</label>
            <?php echo $row['ct_size'] ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Product Image</label>
            <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
            <img src="controller/<?php echo $row['p_image'] ?>" class="avatar avatar-sm me-3" alt="user1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Discription:</label>
            <div>
           <?php echo $row['cust_description'] ?>
</div>
          </div>
          <div class="form-group">
            <!-- <label for="exampleInputPassword1">Status</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['cust_status'] ?>" placeholder=""> -->
            <select name="select" class="form-control">
                <option value="Rejected">Rejected</option>
                <option value="Approved">Approved</option>
            </select>   
          </div>
         
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
  </body>
  
  </html>