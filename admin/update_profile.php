<?php 
include "../config.php";
$admin=new Admin();
if(!isset($_SESSION['a_id'])){
   header('location:sign-in.php');
}
$id= $_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
  Custom Verse | Update Profile
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body style="background-image: url('../images2/3.jpg'); background-size: cover;">
<?php include"sidebar.php"?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h2 class="font-weight-bolder text-info text-gradient"> Update Profile Details</h2>
            <br><br>
            <div class="profile-box">
              <div class="profile-image">
                <img src="profile-image.jpg" alt="Profile Image">
              </div>
              <div class="profile-info">
               
              </div>
            <br><br>
            <form class="form-detail" action="controller/update_profile.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-6">
                <?php
                          $stmt=$admin->ret("SELECT * FROM `admin` where `a_id`='$id'");
                          $row2=$stmt->fetch(PDO::FETCH_ASSOC);
                            ?>
                  <!-- Image field -->
                  
                  <label for="image"><h6>Image:</h6></label>
                  <input type="file" id="image" name="a_profile" accept="image/*" required><br><br>

                  <!-- Admin Name field -->
                  <label for="admin_name"><h6>Admin Name:</h6></label>
                  <input type="text" id="admin_name"  placeholder="<?php echo $row2['a_name']?>" value="<?php echo $row2['a_name']?>" name="a_name" required><br><br>

                  <!-- Email Address field -->
                  <label for="admin_email"><h6>Email Address:</h6></label>
                  <input type="email" id="admin_email"  placeholder="<?php echo $row2['a_email']?>" value="<?php echo $row2['a_email']?>"  name="a_email" required><br><br>
                </div>
                <div class="col-lg-6">
                  <!-- Current Password field -->
                  <label for="admin_password"><h6>Current Password:</h6></label>
                  <input type="text" id="admin_password" placeholder="<?php echo $row2['a_password']?>" value="<?php echo $row2['a_password']?>"  name="a_password" required><br><br>

                  <!-- New Password field -->
                  <label for="new_password"><h6>New Password:</h6></label>
                  <input type="password" id="new_password" placeholder="New Password" name="new_password" required><br><br>

                  <!-- Confirm Password field -->
                  <label for="confirm_password"><h6>Confirm Password:</h6></label>
                  <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required><br><br>
                </div>
              </div>

              <button name="submit" class="btn bg-gradient-info w-70 mt-4 mb-0">Update</button><br><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
  <i class="fa fa-cog py-2"> </i>
</a>
<div class="card shadow-lg ">
  <div class="card-header pb-0 pt-3 ">
    <div class="float-start">
      <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
      <p>See our dashboard options.</p>
    </div>
    <div class="float-end mt-4">
      <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
        <i class="fa fa-close"></i>
      </button>
    </div>
    <!-- End Toggle Button -->
  </div>
  <hr class="horizontal dark my-1">
  <div class="card-body pt-sm-3 pt-0">
    <!-- Sidebar Backgrounds -->
    <div>
      <h6 class="mb-0">Sidebar Colors</h6>
    </div>
    <a href="javascript:void(0)" class="switch-trigger background-color">
      <div class="badge-colors my-2 text-start">
        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
      </div>
    </a>
    <!-- Sidenav Type -->
    <div class="mt-3">
      <h6 class="mb-0">Sidenav Type</h6>
      <p class="text-sm">Choose between 2 different sidenav types.</p>
    </div>
    <div class="d-flex">
      <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
      <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
    </div>
    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
    <!-- Navbar Fixed -->
    <div class="mt-3">
      <h6 class="mb-0">Navbar Fixed</h6>
    </div>
    <div class="form-check form-switch ps-0">
      <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
    </div>
    <hr class="horizontal dark my-sm-4">
    <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Free Download</a>
    <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
    <div class="w-100 text-center">
      <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
      <h6 class="mt-3">Thank you for sharing!</h6>
      <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
      </a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
      </a>
    </div>
  </div>
</div>
</div>
<!--   Core JS Files   -->
<script src=" assets/js/core/popper.min.js"></script>
<script src=" assets/js/core/bootstrap.min.js"></script>
<script src=" assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src=" assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src=" assets/js/plugins/chartjs.min.js"></script>
<script>
var ctx = document.getElementById("chart-bars").getContext("2d");

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Sales",
      tension: 0.4,
      borderWidth: 0,
      borderRadius: 4,
      borderSkipped: false,
      backgroundColor: "#fff",
      data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
      maxBarThickness: 6
    }, ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      }
    },
    interaction: {
      intersect: false,
      mode: 'index',
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false,
        },
        ticks: {
          suggestedMin: 0,
          suggestedMax: 500,
          beginAtZero: true,
          padding: 15,
          font: {
            size: 14,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
          color: "#fff"
        },
      },
      x: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false
        },
        ticks: {
          display: false
        },
      },
    },
  },
});


var ctx2 = document.getElementById("chart-line").getContext("2d");

var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

new Chart(ctx2, {
  type: "line",
  data: {
    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: "Mobile apps",
        tension: 0.4,
        borderWidth: 0,
        pointRadius: 0,
        borderColor: "#cb0c9f",
        borderWidth: 3,
        backgroundColor: gradientStroke1,
        fill: true,
        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
        maxBarThickness: 6

      },
      {
        label: "Websites",
        tension: 0.4,
        borderWidth: 0,
        pointRadius: 0,
        borderColor: "#3A416F",
        borderWidth: 3,
        backgroundColor: gradientStroke2,
        fill: true,
        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
        maxBarThickness: 6
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      }
    },
    interaction: {
      intersect: false,
      mode: 'index',
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: true,
          drawOnChartArea: true,
          drawTicks: false,
          borderDash: [5, 5]
        },
        ticks: {
          display: true,
          padding: 10,
          color: '#b2b9bf',
          font: {
            size: 11,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
      x: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false,
          borderDash: [5, 5]
        },
        ticks: {
          display: true,
          color: '#b2b9bf',
          padding: 20,
          font: {
            size: 11,
            family: "Open Sans",
            style: 'normal',
            lineHeight: 2
          },
        }
      },
    },
  },
});
</script>
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
