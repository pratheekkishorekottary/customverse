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
                            <li class="breadcrumb-item active">My orders</li>
                        </ol>
                        <!-- btn -->
                        <a href="shop.php" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Shop</a>
                    </div>
                </div>
            </div>
        </div>




        <div class="hero_area" style="margin-bottom: 10%;">
    
    <!-- header section strats -->
    <div class="container">
    <?php 
  
$stmt1=$admin->ret("SELECT * FROM `order` WHERE `u_id`='$uid' GROUP BY order.unid");
while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){
$unid=$row1['unid'];
  // $price=;
  // $qty=
  // $total=$price*$qty;
  $g_total=$row1['or_total_amount']*$row1['or_qty'];;
       
    ?>
<article class="card mt-4">
<header class="card-header"> My Orders / Tracking </header>
<div class="card-body">
<h6>Order ID: OD45345345435</h6>
 <article class="card">
<div class="card-body row">
<div class="col"> <strong>Ordered Date:</strong> <br>29 nov 2019 </div>
<div class="col"> <strong>Status:</strong> <br>
 <?php if($row1['or_status'] == 'Pending'){
  ?><a type="button" class="btn btn-info btn-rounded btn-fw">order accepted</a>   
  <?php } elseif ($row1['or_status'] == 'order delivered') { ?>
    <a type="button" class="btn btn-warning btn-rounded btn-fw">Order Deliveried</a>
    <?php } else{?>
        <a type="button" class="btn btn-info btn-rounded btn-fw">Pending</a>  
        <?php } ?>
 </div>
    <?php 
      $total=0;
    $stmt2=$admin->ret("SELECT * FROM `order` WHERE `u_id`='$uid' AND `unid`='$unid'");
    while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
    $total+=$row2['or_total_amount'];
    // echo $total;
    }
    ?>
<div class="col"> <strong>Total:</strong> <br> ₹<?php echo $total?> </div>

</div>
</article>

<hr>

<ul class="row">
<?php 

  $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `product` ON product.p_id=order.p_id WHERE `u_id`='$uid' AND `unid`='$unid'");
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
<li class="col-md-4 card  mt-1 ml-2" style="width:25vw;" >
<a href="controller/cancel_order.php?or_id=<?php echo $row['or_id']?>"  onclick="return confirm('Are you sure want to Cancel Order??')" >

  <span class="badge rounded-pill badge-notification bg-danger position-absolute top-0 start-100 translate-end border border-light " >x</span>
                             
                                    </a>
<figure class="itemside mb-3 mt-3">
<div class="aside"><img src="admin/controller/<?php echo $row['p_image']?>" class="img-sm border"></div>
<figcaption class="info align-self-center">
<p class="title"><?php echo $row['p_name']?> <br>Quantity: <?php echo $row['or_qty']?></p> <span class="text-muted">Total: ₹<?php echo $row['or_total_amount']?>
<?php 


?>
</span>

</figcaption>
</figure>
</li>
<?php } ?>
</ul>

<hr>
<a href="index.php" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
</div>
</article>

<?php } ?> 
</div> 
  </div>














        
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