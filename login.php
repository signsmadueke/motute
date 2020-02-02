<?php include 'api/v0/php/run_cookie_cold.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="keywords" content="Motute">
    <meta name="description" content="Motute">

    <!-- Open Graph -->
    <meta property="og:title" content="Motute">
    <meta property="og:type" content="website">
    <!-- <meta property="og:url" content="index.html"> -->
    <!-- <meta property="og:image" content="assets/images/redpages.jpg"> -->
    <meta property="og:description" content="Motute">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Motute">
    <meta name="twitter:creator" content="@Motute">
    <meta name="twitter:title" content="Motute">
    <!-- <meta name="twitter:image" content="assets/images/Motute.jpg"> -->
    <meta name="twitter:description" content="Motute">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" href="favicon.ico">
    <meta name="theme-color" content="#FB840D">
    <title>Login — Motute</title>
</head>

<body class="body">
    <nav id="nav" class="main navbar fixed-top padding-x2">
        <div class="container">
            <div class="align-items-center d-flex">
                <div class="col-auto ml-auto mr-auto">
                    <div id="logo">
                        <a href="index.php" class="navbar-brand">
                            <img src="assets/images/logo.png" class="svg logo" alt="Logo">
                        </a>
                    </div>
                </div>      
            </div>
        </div>
        <div class="bg-wrap">
            <div class="bg"></div>
        </div>
    </nav>
    <div id="body" class="login-form pt-150">
        <div class="greeting text-center mb-30">
            <h3 class="mb-20" style="">Sign In</h3>
            <p class="body-text text-form">There's a lot to learn from the inside.</p>
        </div>
       
        <!-- Alerts -->
        <div class="alert alert-success-light alert-dismissible fade show" role="alert" id = "success-pop" style = "display: none;">
            <span id = "success-text">Login Successful!</span>
            <button type="button" class="close absolute-right" data-dismiss="alert" aria-label="Close" onclick = "Remove('success-pop')">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="alert alert-error-light with-icon alert-dismissible fade show" role="alert" id = "error-pop" style = "display: none;">
            <span id = "error-text">Enter your Email Address</span>
            <button type="button" class="close absolute-right" data-dismiss="alert" aria-label="Close" onclick = "Remove('error-pop')">
                <span aria-hidden="true">×</span>
            </button>
        </div>
		
        <form action="#" class="form-vertical mb-50" id="popup-login-form" novalidate="novalidate">
            <div class="row">
                <div class="col-12 mb-20 form-group">
                    <label for="username">Email Address or Phone Number</label>
                    <input autofocus type="text" class="form-control" placeholder="eg: johndoe@mail.com or +2348012345678" id = "identity" name="identity" required>
                    <div class="pre-icon os-icon os-icon-user"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group mb-30">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" id = "password" required>
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <div class="custom-control custom-checkbox mb-30">
                        <label class="check">Remember me
                            <input type="checkbox" id = "checkbox" required checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <button type="button" onclick = "LogInUser()" id = "login-button" class="btn btn-block btn-primary">Log In</button>
            
            <p class="spaced-text mb-30 mt-30 text-center">or</p>
            
            <button type="button" onclick = "Redirect('https://www.sumotrust.com/app-access.php')" id = "login-button" class="btn btn-block btn-white btn-sumo"><img class="icon svg" alt="" src="assets/images/icons/social/sumotrust.svg">Login with SumoTrust</button>

        </form>
        <p class="mb-10 text-center text-form">Forgot your password? <a href="reset-password.php">Reset it</a></p>
        <p class="mb-10 text-form text-center">Don't have an account? <a href="register.php">Sign up</a></p>
        <p class="border-top mb-10 mt-75 pt-10 text-center text-form">By clicking on Log In, you agree to our <a href="#">terms &amp; conditions</a> and <a href="#">privacy policy.</a></p>

    </div>

<script src = "assets/js/popper.js"></script>
<script src = "assets/js/jquery.js"></script>
<script src = "assets/js/bootstrap.min.js"></script>
<!--<script src = "assets/js/custom.js"></script>-->
<script src = "api/v0/js/core.js"></script>
<script src = "api/v0/js/login.js"></script>
</body>
</html>
