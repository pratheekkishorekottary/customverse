<?php
include "config.php";
$admin=new admin();
$uid=$_SESSION['u_id'];
if (!isset($_SESSION['u_id'])) {
  header("location:login.php");
  //$_SESSION is from admin loginback.php page
  //checks admin login d or not, otherwise it will redirect to login page
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Custom - Verse| Order Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/logo1.PNG">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #cd9cf2;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1))
}
    </style>

</head>

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <?php include "sidenav.php" ?>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <?php include "header.php" ?>
        <!-- ****** Header Area End ****** -->
       <!-- ****** Top Discount Area Start ****** -->
       <section class="top-discount-area d-md-flex align-items-center">
             <!-- Single Discount Area -->
             <div class="single-discount-area"style="background-image: url('img/bg-img/bggg1.AVIF');">
                <h5>USE CODE: CUSTOMVERSE200</h5>
            </div>
             <!-- Single Discount Area -->
             <div class="single-discount-area" style="background-image: url('img/bg-img/bggg1.AVIF');">
                <h5>Use Code  SUPERB</h5>
                <h6><a href="shop.php">BUY NOW</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area" style="background-image: url('img/bg-img/bggg1.AVIF');">
                <h5> Discount for all Products</h5>
                <h6>USE CODE: CV100</h6>
            </div>
           
        </section>
        <!-- ****** Top Discount Area End ****** -->

        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
        <div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"> My Orders</li>
                        </ol>
                        <!-- btn -->
                        <a href="shop.php" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Shop</a>
                    </div>
                </div>
            </div>
        </div>




<section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">
          <div class="card-header px-4 py-5">
            <h5 class="text-muted mb-0">My Order <span style="color: #a8729a;"><?php echo $_SESSION['u_name']; ?></span>!</h5>
          </div>
          <div class="card-body p-4">
           
           <div class="card shadow-0 border mb-4">
                <?php 
                $stmt=$admin->ret("SELECT * FROM `customized_order` inner join `product` on customized_order.p_id=product.p_id WHERE customized_order.`u_id`='$uid'");
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-1">
                    <img src="controller/<?php echo $row['cust_image'] ?>"
                      class="img-fluid" alt="Phone">
                  </div>
                  <div class="col-md-1">
                    <img src="admin/controller/<?php echo $row['p_image'] ?>"
                      class="img-fluid" alt="Phone">
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small"><?php echo $row['p_name'] ?></p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small"><?php echo $row['ct_size'] ?></p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small"><?php echo $row['cust_status'] ?></p>
                  </div>
                  
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">₹<?php echo $row['price'] ?></p>
                  </div>
                  <?php if($row['cust_status']=='Approved')
                  {?>
                 <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
  <a href="checkout.php?cust_id=<?php echo $row['cust_id']; ?>">
    <button name="addtocart" value="5" class="btn btn-dark">order</button>
  </a>
</div>

                  <?php } ?>
                  
                  
                </div>
                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <!-- <div class="col-md-2">
                    <p class="text-muted mb-0 small">Track Order</p>
                  </div> -->
                  <div class="col-md-10">
                    
                    <!-- <div class="d-flex justify-content-around mb-1">

                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                    </div> -->
                  </div>
                </div>
              </div>
              <?php  } ?>
            </div>

          
        </div>
      </div>
    </div>
  </div>
</section>

















        
        <!-- ****** Footer Area Start ****** -->
        <?php include "footer.php" ?>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>