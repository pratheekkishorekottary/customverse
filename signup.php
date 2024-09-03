<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Verse | Registration</title>
    <link rel="icon" href="img/core-img/logo1.PNG">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
    
</head>
<body style="background-image: url('images2/bg.jpeg'); background-size: cover;">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content"style="background-color:#ffffff9f">
                    <form method="POST" id="signup-form" action="controller/register.php" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="u_name" id="name" placeholder="Enter User Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="u_email" id="email" placeholder="Your Email"required>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-input" name="u_phone" id="phone" placeholder="Your phone no"required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="u_password" id="password" placeholder="Password"required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="u_password" id="password" placeholder="Repeat your password"required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="u_address" id="address" placeholder="enter your address"required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="u_city" id="city" placeholder="enter your city"required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="u_state" id="state" placeholder="enter your state"required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="u_pin" id="pin" placeholder="enter your pin"required>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>