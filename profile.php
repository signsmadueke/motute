<?php
include 'api/v0/php/run_cookie_hot.php';
$title = 'Profile';
require_once 'inc/header.php';
?>


<section id="profile" class="container pt-30 pb-50">
    <div class="row align-items-center profile-details no-gutters">
        <div class="col-sm d-flex no-gutters">
            <div class="col-auto user-pic-div">
                <img class="user-pic" alt="" src="assets/images/placeholders/dp.jpg">
            </div>
            <div class="col-auto">
                <h1 class="mb-0 text-heading"><?php echo($member_data['last_name']); ?><br><?php echo($member_data['first_name']); ?></h1>
                <p class="">UI/UX Designer at Microsoft</p>
                <div class="socials mb-0">
                    <a class="pr-30" href="#">
                        <img class="svg icon" width="20px" alt="" src="assets/images/icons/youtube.svg">
                    </a>
                    <a class="pr-30" href="#">
                        <img class="svg icon" width="20px" alt="" src="assets/images/icons/facebook.svg">
                    </a>
                    <a class="pr-30" href="#">
                        <img class="svg icon" width="20px" alt="" src="assets/images/icons/twitter.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-auto col-md-auto col-sm-12 text-right">
            <a class="btn btn-block btn-primary h-100 mr-10 mt-md-0 mt-sm-20" href="edit-profile.php">Edit Profile</a>
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</section>

<section id="courses" class="pt-50 pb-50">
    <div class="container">
        <h2 class="mb-30 subtitle">My Courses</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/1.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/2.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/3.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/4.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/5.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/6.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
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

<section id="favorite-courses" class="pt-50 pb-50">
    <div class="container">
        <h2 class="mb-30 subtitle">Favorite Courses</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/1.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke favorited" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/2.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke favorited" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/3.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke favorited" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/4.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke favorited" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/5.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke favorited" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/6.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke favorited" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="courses pb-50">
                    <div class="course">
                        <div class="course-title d-block">
                            <a href="#">
                                <img class="course-img" src="assets/images/courses/1.jpg" alt="image">
                            </a>
                            <div class="name no-gutters row">
                                <div class="col-12">
                                    <a href="#"> 
                                        <h2 class="mb-0">Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#"><p>Daniel Hughes</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-auto mr-auto">
                                    <p>$<span>194.99</span></p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon stroke favorited" alt="" src="assets/images/icons/favorite.svg">
                                    </button>
                                    <button type="submit" class="btn btn-light dark">
                                        <img class="svg icon" alt="" src="assets/images/icons/cart.svg">
                                    </button>
                                </div>
                            </div>
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

    
<?php require_once 'inc/footer.php'; ?>