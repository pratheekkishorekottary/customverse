<?php
include 'config.php';
$admin = new Admin();
if (!isset($_SESSION['u_id'])) {
    header("location:login.php");
    //$_SESSION is from user loginback.php page
    //checks admin login d or not, otherwise it will redirect to login page
}
error_reporting(E_ERROR | E_PARSE);

$u_id = $_SESSION['u_id'];
$stmt2 = $admin->ret("SELECT COUNT(*) FROM `cart` WHERE `u_id`='$u_id' ");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$quantity = implode($row2);
$shipping = 50;
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
    <title>Custom - Verse | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/logo1.PNG">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

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

        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container" id="ajax_table">
                <div class="row">
                    <div class="col-10">
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php


                                        $total = 0;
                                        $g_total = 0;


                                        $stmt = $admin->ret("SELECT * FROM `cart` inner join `product`on cart.p_id=product.p_id  where `u_id`='$u_id' ");
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $price = $row['p_price'];
                                            $quantity = $row['cr_qty'];
                                            $total = $price * $quantity;
                                            $g_total = $g_total + $total;
                                            ?>
                                            <td class="cart_product_img d-flex align-items-center">
                                                <a href="#"><img src="admin/controller/<?php echo $row['p_image'] ?>"
                                                        alt="Product"></a>
                                                <h6>
                                                    <?php echo $row['p_name'] ?>
                                                </h6>
                                            </td>
                                            <td class="price"><span>₹
                                                    <?php echo $row['p_price']; ?>/-
                                                </span></td>
                                            <td class="qty">
                                                <div class="">
                                                    <?php if ($row['cr_qty'] > 1) { ?>
                                                        <button onclick="decrement(<?php echo $row['cr_id']; ?>)" type="button"
                                                            class="minus"><i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    <?php } ?>
                                                    <?php echo $row['cr_qty'] ?>
                                                    <button onclick="increment(<?php echo $row['cr_id']; ?>)" type="button"
                                                        class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                </div>
                                            </td>
                                            <td class="total_price"><span>₹
                                                    <?php echo $g_total ?>/-
                                                </span></td>
                                            <td>
                                                <div class="col">
                                                    <div class="" style="margin-left:-10px;"><a
                                                            href="controller/delete_order.php?cr_id=<?php echo $row['cr_id'] ?>"><i
                                                                class="fa fa-times fa-2x" aria-hidden="true"></i></a></div>
                                                </div>

                                            </td>
                                            </tr> 
                                        <?php } ?>
                                                                
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="shop.php">Continue shopping</a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-4">
                 

                        <div class="coupon-code-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Coupon code</h5>
                                <p>Enter your cupone code</p>
                            </div>
                          
                            <form action="controller/voucher.php" method="post">
                                <input  type="search" name="name" placeholder="#569ab15" required>
                                <button  name="submit">Apply</button>
                            </form>
                           
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p> <b>No Of Items:
                                        <?php echo $quantity ?>
                                    </b></p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span>₹
                                        <?php 
                                        $amt=$_GET['amt'];
                                        echo $g_total;
                                      
                                        $final=0;

                                        $final = $g_total + $shipping;
                                        $total=  $final-$amt;
                                   
                                        ?>/-
                                    </span></li>
                                <li><span>Shipping</span> <span>
                                        <?php echo $shipping; ?>
                                    </span></li>
                                <li><span>Coupon Discount</span> <span id="value" >
                                        <?php echo $amt; ?>
                                    </span></li>
                                <li><span><strong>Total</strong></span><strong>₹
                                            <?php echo $total ?>.90
                                        </strong></span></li>
                            </ul>
                            <a href="checkout1.php?total=<?php echo $total; ?>" class="btn karl-checkout-btn">Proceed to
                                checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        <?php include "footer.php" ?>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->
    <script>
        function increment(vcart_id) { //getting from onclick function -can use any variable
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //table id
                    document.getElementById("ajax_table").innerHTML = this.responseText;
                }
            };
            location.reload();
            xmlhttp.open("GET", "quantity_ajax.php ? cart_id_increment=" + vcart_id, true);
           
            xmlhttp.send();
        }
    </script>
    <script>
        function decrement(vcart_id) { //getting from onclick function -can use any variable

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //table id
                    document.getElementById("ajax_table").innerHTML = this.responseText;
                }
            };
            location.reload();
            xmlhttp.open("GET", "quantity_ajax.php ? cart_id_decrement=" + vcart_id, true);
            xmlhttp.send();
        }
    </script>
  

     
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