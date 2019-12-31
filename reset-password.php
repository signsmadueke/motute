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
    <title>Reset Password — Motute</title>
</head>

<body class="body">
    <nav id="nav" class="main navbar position-relative">
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
    <div id="body" class="login-form">
        <div class="greeting text-center mb-30">
            <h3 class="mb-20" style="">Reset your password</h3>
            <p class="body-text text-form">Please enter your email in the form below.</p>
        </div>
        
        
        <!-- Alerts -->
        <div class="alert alert-success-light alert-dismissible fade show" role="alert" id = "success-pop" style = "display: none;">
            <span id = "success-text"></span>
            <button type="button" class="close absolute-right" data-dismiss="alert" aria-label="Close" onclick = "Remove('success-pop')">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="alert alert-error-light with-icon alert-dismissible fade show" role="alert" id = "error-pop" style = "display: none;">
            <span id = "error-text"></span>
            <button type="button" class="close absolute-right" data-dismiss="alert" aria-label="Close" onclick = "Remove('error-pop')">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <form action="javascript:void(0);" class="form-vertical mb-50" id="popup-login-form" novalidate="novalidate">
            <div class="row">
                <div class="col-12 mb-20 form-group">
                    <input type="text" class="form-control" placeholder="Email Address or Phone Number" name="identity" id = "identity">
                    <div class="pre-icon os-icon os-icon-user"></div>
                </div>
            </div>
            <button type="button" onclick = "ResetPassword()" id = "rp-button" class="btn btn-block btn-primary">Reset Password</button>
        </form>
        <p class="border-top mb-10 mt-75 pt-10 text-center text-form">Return to <a href="login.php">Sign in</a></p>
    </div>

<script src="assets/js/popper.js"></script>
<script src = "assets/js/jquery.js"></script>
<script src = "assets/js/bootstrap.min.js"></script>
<!--<script src = "assets/js/custom.js"></script>-->
<script src = "api/v0/js/core.js"></script>
<script src = "api/v0/js/reset-password.js"></script>
</body>
</html>
