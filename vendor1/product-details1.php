<?php
include "config.php";
$admin=new admin();
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
    <title>Custom - Verse | Product Details</title>

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

        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
        <div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                        <!-- btn -->
                        <a href="shop.php" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Shop</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
        <section class="single_product_details_area section_padding_0_100">
            <div class="container">
                <div class="row">
                <?php
                                        $pid=$_GET['p_id'];
                                        $ct_id=$_GET['ct_id'];
                                        $stmt=$admin->ret("SELECT * FROM `product` where `p_id`='$pid'");
                                        $row=$stmt->fetch(PDO::FETCH_ASSOC);

                                        ?>
                    <div class="col-12 col-md-6">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                                <!-- <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(admin/controller/<?php echo $row['p_image'] ?>);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(img/product-img/product-2.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(img/product-img/product-3.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(img/product-img/product-4.jpg);">
                                    </li>
                                </ol> -->

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="admin/controller/<?php echo $row['p_image'] ?>">
                                        <img class="d-block w-100" src="admin/controller/<?php echo $row['p_image'] ?>" alt="First slide">
                                    </a>
                                    </div>
                                    <!-- <div class="carousel-item">
                                        <a class="gallery_img" href="img/product-img/product-2.jpg">
                                        <img class="d-block w-100" src="img/product-img/product-2.jpg" alt="Second slide">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/product-img/product-3.jpg">
                                        <img class="d-block w-100" src="img/product-img/product-3.jpg" alt="Third slide">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="img/product-img/product-4.jpg">
                                        <img class="d-block w-100" src="img/product-img/product-4.jpg" alt="Fourth slide">
                                    </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-16 col-md-6">
                        <div class="single_product_desc">

                            <h4 class="title"><a href="#"><?php echo $row['p_name']?></a></h4>

                            <h4 class="price">₹<?php echo $row['p_price']?>/-</h4>

                            <p class="available">Available: <span class="text-muted">In Stock</span></p>

                            <div class="single_product_ratings mb-15">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                            <div class="widget size mb-50">
    <h6 class="widget-title">Size</h6>
    <div class="widget-desc">
        <ul>
        <?php 
            $size = $row['size'];
            $size1 = explode(',', $size);
            foreach ($size1 as $value) {
                echo "<li><a href='#' onclick=\"show('$value')\" id='s'>$value</a></li>";
            }
            ?>
        </ul>
    </div>
</div>

<!-- Add to Cart Form -->
<form class="cart clearfix mb-190" action="controller/cart.php?p_id=<?php echo $pid; ?>" enctype="multipart/form-data" method="post">
    <div class="quantity">
        <input type="hidden" id="selectedSize" name="size" value="">
        <input type="hidden" id="" name="price" value="<?php echo $row['p_price']?>">
       
    </div>
    <br><br><br><br><br><br>
    <button style="margin-top:-90px; margin-right:1020px;" type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to Cart</button>
</form>

<script>
    function show(size) {
        document.getElementById('selectedSize').value = size;
    }
</script>


                            <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p><?php echo $row['p_description']?></p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cart Details</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Add products to cart and use cupon codes to get amazing Discounts</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Super Fast delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

        <!-- ****** Quick View Modal Area Start ****** -->
        <!-- <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="img/product-img/product-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">Boutique Silk Dress</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">$120.99 <span>$130</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                            <a href="#">View Full Product Details</a>
                                        </div>
                                       
                                        <form class="cart" method="post">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty2" step="1" min="1" max="12" name="quantity" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                           
                                            <div class="modal_pro_wishlist">
                                                <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                            </div>
                                           
                                            <div class="modal_pro_compare">
                                                <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                            </div>
                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- ****** Quick View Modal Area End ****** -->

        <section class="you_may_like_area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
               
                    <div class="col-12">
                   
                        <div class="you_make_like_slider owl-carousel">
                        <?php
                                        $stmt=$admin->ret("SELECT * FROM `product` LIMIT 5");
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
                             <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                <img src="admin/controller/<?php echo $row['p_image']?>" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">₹<?php echo $row['p_price']?>/-</h4>
                                    <h2><?php echo $row['p_name']?><h2>
                                    <!-- Add to Cart -->
                                    <a href="product-details1.php?p_id=<?php echo $row['p_id']; ?>&ct_id=<?php echo 16; ?>"class="add-to-cart-btn">View Product</a>
                                </div>
                            </div>
                            <?php } ?>
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