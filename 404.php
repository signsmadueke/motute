<?php
include 'api/v0/php/user.php';
include 'api/v0/php/run_cookie_hot.php';
$title = 'Profile';
require_once 'inc/header.php';
?>
    <section id="404" class="container">
        <div class="row align-items-center pb-100 pt-100">
            <div class="col-md">
                <img src="assets/images/svgs/404.svg" class="padding-x2 replaced-svg svg w-100" alt="" style="max-height: 50vh;">
            </div>
            <div class="col-md text-left text-md-left text-sm-center text-xl-left">
                <h1 class="mb-20">Page Not Found</h1>
                <p class="mb-30">Sory, we couldn't find that page.<br>Try a search or go back to the <a href="javascript:history.go(-1);">previous page.</a></p>
                <form action="#" class="form-inline mb-30 search w-100 align-items-center">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-link dark"><img class="svg icon" alt="" src="assets/images/icons/outline-search-24px.svg"></button>
                            </div>
                            <input type="search" class="form-control" placeholder="What do you want to learn?">
                        </div>
                    </div>
                </form>
                <a href="index.php" class="btn btn-secondary">Go Home</a>
            </div>
        </div>
        <div class="bg-wrap">
            <div class="bg"></div>
        </div>
    </section>

    <section id="login-cta" class="light pt-lg-50 pt-md-75 pt-sm-50 pb-lg-100 pb-md-75 pb-sm-50 padding-x3">
         <div class="container">
             <div class="row align-items-center padding-x3">
                 <div class="ml-auto mr-auto text-center mt-50 mb-50">
                     <h2>Get the app.</h2>
                     <p class="mb-30">Start learning today.</p>
                     <div class="ml-auto mr-auto text-center" style="">
                         <div class="d-flex">
                            <div class="col" style="padding-left: 30px; padding-right: 5px;">
                                <a href="#">
                                    <img src="assets/images/icons/app/android.svg" width="100%" class="svg">
                                </a>
                            </div>
                            <div class="col" style="padding-left: 5px; padding-right: 30px;">
                                <a href="#">
                                    <img src="assets/images/icons/app/ios.svg" width="100%" class="svg">
                                </a>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="bg-wrap">
             <div class="bg"></div>
         </div>
     </section>

    <footer id="footer" class="light">
        <div class="container">
            <div class="row text-center ml-auto mr-auto">
                <p class="padding text-center ml-auto mr-auto">© Copyright 2019. All Rights Reserved</p>
            </div>
        </div>
        <div class="bg-wrap">
            <div class="bg"></div>
        </div>
    </footer>

    <div class="modal-container"></div>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
