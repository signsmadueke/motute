<?php
include 'api/v0/php/user.php';
include 'api/v0/php/run_cookie_hot.php';
$title = 'Profile';
require_once 'inc/header.php';
?>

<section id="403" class="container">
    <div class="row align-items-center pb-100 pt-100">
        <div class="col-md">
            <img src="assets/images/svgs/403.svg" class="padding-x2 replaced-svg svg w-100" alt="" style="max-height: 50vh;">
        </div>
        <div class="col-md text-left text-md-left text-sm-center text-xl-left">
            <h1 class="bigtext mb-20">403</h1>
            <h3>Access Denied</h3>
            <p class="mb-30">You don't have permission to access this page.<br>You can go back to the <a href="javascript:history.go(-1);">previous page. </a></p>
            <a href="index.php" class="btn btn-secondary">Go Home</a>
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</section>

<?php require_once 'inc/footer.php'; ?>