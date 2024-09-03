<header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end" >

                        <div class="col-12 col-lg-8">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo2.png" alt="" style="margin-left:-120px;" width=600px></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                   
                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div width=""class="main_header_area">
                
                <div class="container h-100 ">
                <div  class="content-justify-auto header-right-side-menu ml-15 mb-10" >
                                        <a href="#" id="sideMenuBtn" style="margin-top:-50px;margin-left:-100px"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                    <div class="row h-100">
                    
                        <div class="col-12 d-md-flex justify-content-between">
                        
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <!-- <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a style="font-size:20px;"class="nav-link" href="index.php">Home</a></li>
                                            <li class="nav-item"><a style="font-size:20px;" class="nav-link" href="shop.php">Shop</a></li>
                                            <li class="nav-item"><a style="font-size:20px;" class="nav-link" href="customize.php">Customize</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" style="font-size:20px;" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Order</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="my_order.php">Custom order</a>
                                                    <a class="dropdown-item" href="my_order1.php">Order</a>
                                                   
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Button code goes here -->
                            </div>
                            
                            <!-- Help Line -->
                        <?php if(!isset($_SESSION['u_id'])){ ?>
                            <div class="help-line">
                                <a href="login.php">LOGIN</a>
                            </div>
                            <?php } else{?>
                                <div class="help-line">
                                <a href="controller/logout.php">LOGOUT</a>
                            </div>
                                <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </header>