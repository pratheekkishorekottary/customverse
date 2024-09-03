<?php
include "config.php";
$admin=new admin();
$or_id=$_GET['or_id'];
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
    <title>Custom - Verse | Shop</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/logo1.PNG">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  <style>
       @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap');
body{
	background: #EEEEEE;
	font-family: 'Hind Siliguri', sans-serif;
}
.card{
	width: 300px;
	border: none;
	border-radius: 15px;
}
.adiv{
	background: #0063FF;
	border-radius: 15px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
	font-size: 12px;
	height: 46px;
}
img{
	margin-right: 10px;
	width: 35px;
	height: 35px;
	cursor: pointer;
}
.fas{
	cursor: pointer;
}
.fa-chevron-left{
	color: #fff;
}
h6{
	font-size: 12px;
	font-weight: bold;
}
small{
	font-size: 10px;
	color: #898989;
}
.form-control{
	border: none;
	background: #F6F7FB;
	font-size: 12px;
}
.form-control:focus{
	box-shadow: none;
	background: #F6F7FB;
}
.form-control::placeholder{
	font-size: 12px;
	color: #B8B9BD;
}
.btn-primary{
	background: #0063FF;
	padding: 4px 0 7px;
	border: none;
}
.btn-primary:focus{
	box-shadow: none;
}
.btn-primary span{
	font-size: 12px;
	color: #A6DCFF;
}
p.mt-3{
	font-size: 11px;
 	color: #B8B9BD; 
 	cursor: pointer;
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
       
<div class="container d-flex justify-content-center">
  <div class="card mt-5 pb-5">
    <div class="d-flex flex-row justify-content-between p-3 adiv text-white">
      <i class="fas fa-chevron-left"></i>
      <span class="pb-3">feedback</span>
      <i class="fas fa-times"></i>
    </div>
      <div class="mt-2 p-4 text-center">
        <h6 class="mb-0">Your feedback help us to improve.</h6>
        <small class="px-3">Please let us know about your chat experience.</small>
          <div class="d-flex flex-row justify-content-center mt-2">
            <img src="https://img.icons8.com/emoji/48/000000/angry-face-emoji--v2.png"/>
            <img src="https://img.icons8.com/fluent/48/000000/sad.png"/>
            <img src="https://img.icons8.com/color/48/000000/happy.png"/>
            <img src="https://img.icons8.com/emoji/48/000000/smiling-face.png"/>
            <img src="https://img.icons8.com/color/48/000000/lol.png"/>
          </div>
      </div>
      <form action="controller/feedback.php?or_id=<?php echo $or_id; ?>" method="post">
        <div class="form-group mt-4">
          <textarea class="form-control" name="discript" rows="4" placeholder="Message"></textarea>
        </div>
        <div class="mt-2">
          <button type="submit" name="submit" class="btn btn-primary btn-block"><span>Send feedback</span></button>
        </div>
        <a href="my_order1.php"> <p class="mt-3">Continue without sending feedback</p></a>
      </form>
  </div>
</div>

 <!-- ****** Footer Area Start ****** -->
 <?php include "footer.php" ?>

 <!-- ****** Footer Area End ****** -->
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