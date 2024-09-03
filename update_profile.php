<?php 
include "config.php";
$admin=new Admin();
if(!isset($_SESSION['u_id'])){
   header('location:sign-in.php');
}
$id= $_SESSION['u_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Custom - Verse | Profile</title>
<link rel="icon" href="img/core-img/logo1.PNG">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
     <style>
body {
    background-image: url("images2/9.JPG");
    background-size: cover;
}
</style>
</head>
<body>
<div class="container">
<div class="main-body">

<nav aria-label="breadcrumb" class="main-breadcrumb">
<ol class="breadcrumb" style="background-color:#ffffff8f">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">My Profile</li>
</ol>
</nav>

<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<form action="controller/update_profile.php" method="post" enctype="multipart/form-data" >
<div class="card"style="background-color:#ffffff8f">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<?php
$stmt=$admin->ret("SELECT * FROM `customer` where `u_id`='$id'");
$row2=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<img src=" controller/<?php echo $row2['u_profile'] ?>" alt="user_profile" class="rounded-circle" width="150">
<input type="file" id="image" name="u_profile" accept="" required><br><br>
<div class="mt-3">
<h4><?php echo $row2['u_name'] ?></h4>
<p class="text-secondary mb-1">SDM</p>
<p class="text-muted font-size-sm"><?php echo $row2['u_address'] ?></p>

</div>
</div>
</div>
</div>

</div>
<div class="col-md-8">
<div class="card mb-3"style="background-color:#ffffff8f">
    
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" id="admin_name"  placeholder="<?php echo $row2['u_name']?>" value="<?php echo $row2['u_name']?>"  name="u_name" required>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" id="admin_name"  placeholder="<?php echo $row2['u_email']?>" value="<?php echo $row2['u_email']?>" name="u_email" required>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" id="admin_name"  placeholder="<?php echo $row2['u_phone']?>" value="<?php echo $row2['u_phone']?>" name="u_phone" required>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Address</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" id="admin_name"  placeholder="<?php echo $row2['u_address']?>" value="<?php echo $row2['u_address']?>" name="u_address" required>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Password</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" id="admin_name"  placeholder="<?php echo $row2['u_password']?>" value="<?php echo $row2['u_password']?>" name="u_password" required>

</div>
</div>

<hr>
<div class="row">
<div class="col-sm-12">
<button name="submit" class="btn btn-info " href="update_profile.php">update</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>