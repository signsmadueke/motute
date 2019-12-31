<?php include 'api/v0/php/user.php'; ?>
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
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/video-js.css">
    <!-- <link rel="stylesheet" href="assets/css/video-theme.css"> -->
    <link rel="stylesheet" href="assets/css/city/index.css">
    <link rel="stylesheet" href="assets/css/fantasy/index.css">
    <link rel="stylesheet" href="assets/css/forest/index.css">
    <link rel="stylesheet" href="assets/css/sea/index.css">
    <!-- Scripts -->
    <script src="assets/js/videojs-ie8.min.js"></script>

    <link rel="icon" href="favicon.ico">
    <meta name="theme-color" content="#FB840D">
    <title>Getting Started with InVision — Motute</title>
</head>

<body id="home" class="body">
    <nav id="nav" class="main navbar position-relative">
        <div class="container">
            <div class="align-items-center d-flex">
                <div class="col-auto navbar-brand pl-0">
                    <div id="logo">
                        <a href="index.php">
                            <img src="assets/images/logo.png" class="svg logo" alt="Logo">
                        </a>
                    </div>
                </div>

                <div class="col-lg d-flex hidden-md hidden-sm mr-auto position-static" style="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link sub-menu-link d-flex" href="#">
                                Browse
                                <img class="svg icon ml-10" alt="" src="assets/images/icons/outline-chevron_down-24px.svg">
                            </a>
                            <div class="mega-menu-container shadow bg-default padding-x4" style="background-position: left center;background-size: cover;background-color: white;width: 90%;margin: 0 auto;">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3 class="">Learn on your schedule</h3>
                                        <p class="mb-30 mb-lg-0 text-secondary">The world’s largest selection of courses Choose from over 100,000 online video courses with new additions published every month</p>
                                    </div>
                                    <div class="col-lg">
                                        <ul class="list-unstyled padding-list mb-30 mb-lg-0">
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg">
                                        <ul class="list-unstyled padding-list mb-30 mb-lg-0">
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg">
                                        <ul class="list-unstyled padding-list mb-30 mb-lg-0">
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                            <li><img class="svg icon icon-left" alt="" src="assets/images/icons/baseline-favorite_border-24px.svg"><a href="#">Category text link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <form action="#" class="form-inline ml-30 search w-100 align-items-center">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-link dark"><img class="svg icon" alt="" src="assets/images/icons/outline-search-24px.svg"></button>
                                </div>
                                <input type="search" class="form-control" placeholder="What do you want to learn?">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-auto d-flex hidden-md hidden-sm ml-auto pl-0 pr-0" style="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link dark" href="#"><img class="svg icon" alt="" src="assets/images/icons/bell.svg" style="width: 32px;"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-auto d-flex hidden-md hidden-sm ml-auto pl-0 pr-0" style="">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link dark" href="#"><img class="svg icon" alt="" src="assets/images/icons/carts.svg" style="width: 32px;"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-auto align-items-center d-flex hidden-md hidden-sm ml-auto pr-0 pl-0 show" style="">
                    <ul class="navbar-nav">

                        <li class="nav-item account">
                            <a class="nav-link padding sub-menu-link" href="#">
                                <img class="user ml-0" alt="" src="assets/images/placeholders/dp.jpg">
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a class="align-items-center border-bottom d-flex mb-20 ml-10 mr-10 mt-0 nav-link no-gutters" style="padding: 25px;" href="#">
                                        <div class="col-auto">
                                            <img class="user" alt="" src="assets/images/placeholders/dp.jpg">
                                        </div>
                                        <div class="col-auto d-block">
                                            <h5>Hello, <?php echo($member_data['first_name']); ?></h5>
                                            <p><?php echo($member_data['email_address']); ?></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#" class="nav-link">
                                        <img class="svg icon" alt="" src="assets/images/icons/user.svg">
                                        Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="nav-link">
                                        <img class="svg icon" alt="" src="assets/images/icons/message.svg">
                                        Messages
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="nav-link">
                                        <img class="svg icon" alt="" src="assets/images/icons/like.svg">
                                        Wishlist
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="nav-link">
                                        <img class="svg icon" alt="" src="assets/images/icons/settings.svg">
                                        Settings
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="nav-link">
                                        <img class="svg icon" alt="" src="assets/images/icons/logout.svg">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-auto ml-auto pr-0 hidden-lg navbar-nav">
                    <button class="collapsed hidden-lg navbar-toggler" type="button" data-toggle="collapse" data-target=".main-menu-collapse" aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
            </div>
        </div>
        <div class="bg-wrap">
            <div class="bg"></div>
        </div>
    </nav>

    <section id="video" class="container fullwidth">
        <div class="course-head">
            <h4 class="mb-0 course-name">Getting Started with InVision</h4>
            <p class="mb-0 course-author">Daniel Hughes</p>
        </div>
        <div class="course-video">
            <video
                id="my-video"
                class="video-js vjs-default-skin"
                controls
                loop
                preload="auto"
                height="600"
                poster="assets/images/placeholders/course-ph.jpg"
                data-setup=''
            >
                <source src="assets/videos/black.mp4" type="video/mp4"/>
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
            <div class="playlist">
                <div class="lessons-head">
                    <h4>Lessons</h4>
                    <p>14 Lessons (57m)</p>
                </div>
                <ul class="lessons">
                    <a href="#" class="lesson no-gutters active" data-tippy-content="Installation">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Installation</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="The MVC architectural pattern">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;The MVC architectural pattern</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="Database Models">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Database Models</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="Eloquent Basics">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Eloquent Basics</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="Take Quiz">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Take Quiz</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="Installation">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Installation</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="The MVC architectural pattern">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;The MVC architectural pattern</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="Database Models">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Database Models</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="Eloquent Basics">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Eloquent Basics</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>

                    <a href="#" class="lesson no-gutters" data-tippy-content="Take Quiz">
                        <div class="col-9">
                            <li class="mb-0 text-truncate">&nbsp;Take Quiz</li>
                        </div>
                        <div class="col-3">
                            <p class="mb-0 text-right">11m</p>
                        </div>
                    </a>
                </ul>
            </div>
        </div>
        <div class="bg-wrap">
            <div class="bg"></div>
        </div>
    </section>

    <section id="tab-navigation" class="container pt-50">
        <div class="row">
            <div class="col-lg-9 col-md-12 pr-lg-15 pr-md-30 pb-50">
                <div class="text-center w-100">
                    <ul class="nav tabs" id="myTab" role="tablist">
                        <li class="tab tab-secondary">
                            <a class="active" id="all-categories-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="true"><span>Overview</span></a>
                        </li>
                        <li class="tab tab-secondary">
                            <a class="" id="art-design-tab" data-toggle="tab" href="#art-design" role="tab" aria-controls="art-design" aria-selected="false"><span>Overview</span></a>
                        </li>
                        <li class="tab tab-secondary">
                            <a class="" id="photo-video-tab" data-toggle="tab" href="#photo-video" role="tab" aria-controls="photo-video" aria-selected="false"><span>Overview</span></a>
                        </li>
                        <li class="tab tab-secondary">
                            <a class="" id="more-tab" data-toggle="tab" href="#more" role="tab" aria-controls="more" aria-selected="false"><span>Overview</span></a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-30" id="myTabContent">
                    <div class="tab-pane fade active show" id="all-categories" role="tabpanel" aria-labelledby="all-categories-tab">
                        <h4 class="mb-10 pb-10 subtitle">About Course</h4>
                        <p>
                            Come learn with us! This group session covers everything you need to start using InVision including: design workflows, Boards, Freehand, prototyping, managing feedback and collaborators, design tool integrations, and a quick intro to Studio and DSM. Check out the full agenda.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="art-design" role="tabpanel" aria-labelledby="art-design-tab">
                        <h1 class="text-center">...</h1>
                    </div>
                    <div class="tab-pane fade" id="photo-video" role="tabpanel" aria-labelledby="photo-video-tab">
                        <h1 class="text-center">...</h1>
                    </div>
                    <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                        <h1 class="text-center">...</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 pl-lg-15 pl-md-30 pb-50">
                <div class="courses">
                    <div class="course">
                        <div class="course-title d-block ">
                            <div class="align-items-center no-gutters row teacher">
                                <div class="col-auto">
                                    <a href="#"><img src="assets/images/placeholders/guy.png" width="60" height="60" alt=""></a>
                                </div>
                                <div class="col-9">
                                    <a href="#">
                                        <h6>Daniel Hughes</h6>
                                        <p>Tutor</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-12 mr-auto">
                                    <p>Having over 12 years exp. Adrian is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item-details d-block">
                            <div class="align-items-center no-gutters row">
                                <div class="col-12 mr-auto">
                                    <a class="btn btn-secondary btn-block mr-10 h-100 hidden-sm" href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wrap">
                <div class="bg"></div>
            </div>
        </div>
        </div>
    </section>

    <section id="related-courses" class="pt-50 pb-50">
        <div class="container">
            <h2 class="mb-30 subtitle">Related Courses</h2>
            <div class="row">
                <div class="col-12">
                    <div class="section-carousel carousel-nav-center-bottom carousel-dots-none">
                        <div class="related courses slider pb-50 owl-drag">
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
                            <div class="item course gallery-item gallery-style-1">
                                <div class="course-title d-block">
                                    <a href="#">
                                        <img class="course-img" src="assets/images/blog/post1.jpg" alt="image">
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
    <script src="assets/js/video.js"></script>
    <script src="assets/js/tippy.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
