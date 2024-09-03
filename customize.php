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
    <title>Custom - Verse | Customize</title>

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
       

        <section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Customize</h2>
                </div>
            </div>
        </div>
    </div>
            <div class="container">
                <div class="row">
                   

                    <div class="col-12 col-md-8 col-lg-12">
                        <div class="shop_grid_product_area">
                            <div class="row">
                            <?php
                                        $stmt=$admin->ret("SELECT * FROM `product` where `ct_id`=16");
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>


                                <!-- Single gallery Item -->
                                <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                    <img src="admin/controller/<?php echo $row['p_image']?>" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview<?php echo $row['p_id'] ?>"><i class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                    <h4>₹<?php echo $row['p_price']?></h4>
                                    <h2><?php echo $row['p_name']?></h2>
                                    <p><?php echo $row['p_description']?></p>
                                        <!-- Add to Cart -->
                                    </div>
                                </div>
                                 <!-- ****** Quick View Modal Area Start ****** -->

        <div class="modal fade" id="quickview<?php echo $row['p_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
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
                                        <img src="admin/controller/<?php echo $row['p_image']?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                        <h4 class="title"><?php echo $row['p_name']?></h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h4>₹<?php echo $row['p_price']?></h4>
                                            <p><?php echo $row['p_description']?></p>
                                        </div>
                                        <!-- Add to Cart Form -->
                                        <form class="cart" method="post">
                                           <a href="product-details.php?p_id=<?php echo $row['p_id']; ?>&ct_id=<?php echo 16; ?>"> <button  value="5" class="cart-submit">Customize</a></button>
                                        </form>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- ****** Quick View Modal Area End ****** -->
                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.3s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img"> -->
                                        <!-- <img src="img/product-img/product-2.jpg" alt=""> -->
                                        <!-- <div class="product-quicview"> -->
                                            <!-- <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a> -->
                                        <!-- </div> -->
                                    <!-- </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description"> -->
                                        <!-- <h4 class="product-price">$39.90</h4> -->
                                        <!-- <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a> -->
                                    <!-- </div> -->
                                <!-- </div> -->

                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.4s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img"> -->
                                    <!-- <img src="admin/controller/<?php echo $row['p_image']?>" alt=""> -->
                                        <!-- <div class="product-quicview"> -->
                                            <!-- <a href="#" data-toggle="modal" data-target="#quickview"> <?php echo $row['p_image']?>"><i class="ti-plus"></i></a> -->
                                        <!-- </div> -->
                                    <!-- </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description"> -->
                                        <!-- <h4 class="product-price">$39.90</h4> -->
                                        <!-- <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a> -->
                                    <!-- </div> -->
                                <!-- </div> -->

                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.5s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img"> -->
                                        <!-- <img src="img/product-img/product-4.jpg" alt=""> -->
                                        <!-- <div class="product-quicview"> -->
                                            <!-- <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a> -->
                                        <!-- </div> -->
                                    <!-- </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div> -->

                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.6s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img">
                                        <img src="img/product-img/product-5.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div> -->

                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.7s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img">
                                        <img src="img/product-img/product-6.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div> -->

                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.8s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img">
                                        <img src="img/product-img/product-7.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div> -->

                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.9s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img">
                                        <img src="img/product-img/product-8.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                    <?php } ?>
                                </div> -->

                                <!-- Single gallery Item -->
                                <!-- <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="1s"> -->
                                    <!-- Product Image -->
                                    <!-- <div class="product-img"> -->
                                        <!-- <img src="img/product-img/product-9.jpg" alt="">
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                        </div>
                                    </div> -->
                                    <!-- Product Description -->
                                    <!-- <div class="product-description">
                                        <h4 class="product-price">$39.90</h4>
                                        <p>Jeans midi cocktail dress</p> -->
                                        <!-- Add to Cart -->
                                        <!-- <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                    </div>
                                </div> -->
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