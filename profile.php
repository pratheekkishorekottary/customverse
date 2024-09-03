<?php
include "config.php";
$admin = new Admin();
if (!isset($_SESSION['u_id'])) {
       header("location:login.php");     
}
$u_id=$_SESSION['u_id'];
$stmt=$admin->ret("SELECT * FROM `customer` where `u_id`='$u_id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
<ol class="breadcrumb" style="background-color:#ffffff9f">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">My Profile</li>
</ol>
</nav>

<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card" style="background-color:#ffffff8f">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="controller/<?php echo $row['u_profile']; ?>" alt="user_profile" class="rounded-circle" width="150">

<div class="mt-3">
<h4><?php echo $row['u_name']; ?></h4>
<p class="text-secondary mb-1">SDM</p>
<p class="text-muted font-size-sm"><?php echo $row['u_address']; ?></p>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-8">
<div class="card mb-3"  style="background-color:#ffffff8f">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $row['u_name'] ;?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="197f706959736c72746c71377875"><?php echo $row['u_email']; ?><!--[email&#160;protected]--></a>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $row['u_phone']; ?>

</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Address</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $row['u_address']; ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-12">
<a class="btn btn-info " href="update_profile.php">Edit</a>
</div>
</div>
</div>
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