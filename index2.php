<?php
// include 'api/v0/php/run_cookie_warm.php';
$title = 'Home';
$extraNavClasses = 'transparent';
require_once 'inc/header.php';
?>
    <section id="home-hero">
        <div class="container">
            <h2>Teach<span> and </span>Learn
                <br>
                Anything<span> from </span>Anywhere
            </h2>
            <div class="hero-cta">
                <a class="btn btn-primary" href="register.php">Create Account</a>
                <a class="btn btn-secondary white" href="login.php">Login</a>
            </div>
        </div>
    </section>

    <section id="home-fav-cats" class="container">
        <div class="container">
            <h3>Select your favourite category & start learning.</h3>
            <div id="categories" class="owl-carousel owl-theme">
                <a href="#" class="category item" style="background-image: url(assets/images/categories/business.jpg);">
                    <h6 class="cat-name">Business</h6>
                    <div class="cat-image"></div>
                </a>

                <a href="#" class="category item" style="background-image: url(assets/images/categories/development.jpg);">
                    <h6 class="cat-name">Business</h6>
                    <div class="cat-image"></div>
                </a>

                <a href="#" class="category item" style="background-image: url(assets/images/categories/design.jpg);">
                    <h6 class="cat-name">Business</h6>
                    <div class="cat-image"></div>
                </a>

                <a href="#" class="category item" style="background-image: url(assets/images/categories/business.jpg);">
                    <h6 class="cat-name">Business</h6>
                    <div class="cat-image"></div>
                </a>

                <a href="#" class="category item" style="background-image: url(assets/images/categories/development.jpg);">
                    <h6 class="cat-name">Business</h6>
                    <div class="cat-image"></div>
                </a>

                <a href="#" class="category item" style="background-image: url(assets/images/categories/design.jpg);">
                    <h6 class="cat-name">Business</h6>
                    <div class="cat-image"></div>
                </a>

                <a href="#" class="category item" style="background-image: url(assets/images/categories/business.jpg);">
                    <h6 class="cat-name">Business</h6>
                    <div class="cat-image"></div>
                </a>
            </div>
        </div>
    </section>

    <section id="home-trending-courses" class="container">
        <div class="trending-courses-nav">
            <h3>Trending Courses</h3>
            <ul class="nav horizontal nav-tabs show-desktop" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="false"><img class="svg icon stroke" alt="" src="assets/images/icons/dev.svg">Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="all-categories-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="true"><img class="svg icon stroke" alt="" src="assets/images/icons/itandsoftware.svg">IT & Software</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="false"><img class="svg icon stroke" alt="" src="assets/images/icons/business.svg">Business</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="false"><img class="svg icon stroke" alt="" src="assets/images/icons/marketing.svg">Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="false"><img class="svg icon stroke" alt="" src="assets/images/icons/design.svg">Design</a>
                </li>
            </ul>

            <ul class="nav tabs show-mobile" id="myTab" role="tablist">
                <li class="tab tab-secondary active">
                    <a class="active" id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="true"><img class="svg icon stroke" alt="" src="assets/images/icons/dev.svg"><span>Development</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a id="all-categories-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="true"><img class="svg icon stroke" alt="" src="assets/images/icons/itandsoftware.svg"><span>IT & Software</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="false"><img class="svg icon stroke" alt="" src="assets/images/icons/business.svg"><span>Business</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="false"><img class="svg icon stroke" alt="" src="assets/images/icons/marketing.svg"><span>Marketing</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a id="dev-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="false"><img class="svg icon stroke" alt="" src="assets/images/icons/design.svg"><span>Design</span></a>
                </li>
            </ul>

        </div>
        <div class="trending-courses-tab">
            <div class="tab-pane fade active show" id="all-categories" role="tabpanel" aria-labelledby="all-categories-tab">
                <div class="courses">
                    <div class="course">
                        <div class="course-image">
                            <a href="#">
                                <span class="featured-course-label">Featured</span>
                                <img src="assets/images/courses/1.jpg" alt="image">
                            </a>
                        </div>
                        <div class="course-details">
                            <a href="#" class="course-name">
                                <span class="course-category">IT & Software</span>
                                <h2>Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                            </a>
                            <div class="course-rating">
                                <div class="star">
                                    <img class="svg icon" alt="" src="assets/images/icons/star.svg">
                                </div>
                                <h6>4.5</h6>
                                <p>(38 ratings)</p>
                            </div>
                            <div class="course-teacher">
                                <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                <p>
                                    <span>by</span>
                                    <a href="#">Daniel Hughes</a>
                                </p>
                            </div>
                            <div class="course-actions">
                                <div class="bookmark active">
                                    <img class="svg icon" alt="" src="assets/images/icons/bookmark.svg">
                                </div>
                                <div class="favorite active">
                                    <img class="svg icon" alt="" src="assets/images/icons/favorite.svg">
                                </div>
                                <div></div>
                            </div>
                            <div class="course-price">
                                <p class="price">
                                    ₦
                                    <span>5,000</span>
                                </p>
                                <button class="btn btn-cart">
                                    <img class="svg icon" alt="" src="assets/images/icons/basket.svg">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-image">
                            <a href="#">
                                <span class="featured-course-label">Featured</span>
                                <img src="assets/images/courses/2.jpg" alt="image">
                            </a>
                        </div>
                        <div class="course-details">
                            <a href="#" class="course-name">
                                <span class="course-category">IT & Software</span>
                                <h2>Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                            </a>
                            <div class="course-rating">
                                <div class="star">
                                    <img class="svg icon" alt="" src="assets/images/icons/star.svg">
                                </div>
                                <h6>4.5</h6>
                                <p>(38 ratings)</p>
                            </div>
                            <div class="course-teacher">
                                <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                <p>
                                    <span>by</span>
                                    <a href="#">Daniel Hughes</a>
                                </p>
                            </div>
                            <div class="course-actions">
                                <div class="bookmark active">
                                    <img class="svg icon" alt="" src="assets/images/icons/bookmark.svg">
                                </div>
                                <div class="favorite active">
                                    <img class="svg icon" alt="" src="assets/images/icons/favorite.svg">
                                </div>
                                <div></div>
                            </div>
                            <div class="course-price">
                                <p class="price">
                                    ₦
                                    <span>5,000</span>
                                </p>
                                <button class="btn btn-cart">
                                    <img class="svg icon" alt="" src="assets/images/icons/basket.svg">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-image">
                            <a href="#">
                                <span class="featured-course-label">Featured</span>
                                <img src="assets/images/courses/3.jpg" alt="image">
                            </a>
                        </div>
                        <div class="course-details">
                            <a href="#" class="course-name">
                                <span class="course-category">IT & Software</span>
                                <h2>Become a UX Designer | Learn the Skills &amp; Get the Job</h2>
                            </a>
                            <div class="course-rating">
                                <div class="star">
                                    <img class="svg icon" alt="" src="assets/images/icons/star.svg">
                                </div>
                                <h6>4.5</h6>
                                <p>(38 ratings)</p>
                            </div>
                            <div class="course-teacher">
                                <a href="#"><img src="assets/images/placeholders/guy.png" alt=""></a>
                                <p>
                                    <span>by</span>
                                    <a href="#">Daniel Hughes</a>
                                </p>
                            </div>
                            <div class="course-actions">
                                <div class="bookmark active">
                                    <img class="svg icon" alt="" src="assets/images/icons/bookmark.svg">
                                </div>
                                <div class="favorite active">
                                    <img class="svg icon" alt="" src="assets/images/icons/favorite.svg">
                                </div>
                                <div></div>
                            </div>
                            <div class="course-price">
                                <p class="price">
                                    ₦
                                    <span>5,000</span>
                                </p>
                                <button class="btn btn-cart">
                                    <img class="svg icon" alt="" src="assets/images/icons/basket.svg">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div><a href="#" class="btn btn-primary">Explore All Courses</a></div>
        </div>
    </section>

<?php require_once 'inc/footer.php'; ?>

<?php require_once 'inc/scripts.php'; ?>

</body>
</html>