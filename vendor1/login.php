<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Custom - Verse | Login</title>
	<link rel="icon" href="img/core-img/logo1.PNG">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css2/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css2/style.css"/>
	
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="images2/bg.JPG" alt="form" width="400" height="600">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<h2 class="form-title;" style="text-align: center;">Sign-in</h2>
					</div>
				</div>
				<form class="form-detail" action="controller/login.php" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="u_name" id="your_name" class="input-text" required>
								<span class="label">User name</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="u_password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="submit" class="register"value="Sign In">
						</div>
						<p class="loginhere">
                       <h3> Dont have an account? <a href="signup.php" class="loginhere-link">Register now</a><h3>
                    </p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>
</html>