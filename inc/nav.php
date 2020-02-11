<nav id="nav" class="main navbar <?php echo $extraNavClasses; ?>">
    <div class="container">
        <div class="col-auto navbar-brand no-gutters">
            <div id="logo">
                <a href="index.php">
                    <img src="assets/images/logo.svg" class="svg logo show-desktop" alt="Logo">
                    <img src="assets/images/favicon.svg" class="svg logo show-mobile" alt="Logo">
                </a>
            </div>
        </div>

        <ul class="navbar-nav d-sm-none d-md-none d-lg-block">
            <li class="nav-item">
                <a class="nav-link sub-menu-link d-flex" href="#">
                    Browse
                    <img class="svg icon ml-10" alt="" src="assets/images/icons/outline-chevron_down-24px.svg">
                </a>
                <div class="mega-menu-container container" style="padding: 0;margin: 0 auto;">
                    <div class="d-flex">
                        <div class="col-lg-6 col-md-12 megamenu-links">
                            <div class="row">
                                <div class="col-md">
                                    <h6>Design</h6>
                                    <ul>
                                        <li><a href="#">Business Analytics</a></li>
                                        <li><a href="#">Freelance &amp; Entrepreneurship</a></li>
                                        <li><a href="#">Leadership &amp; Management</a></li>
                                    </ul>

                                    <h6 class="mt-30">IT &amp; Software</h6>
                                    <ul>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>

                                    <h6 class="mt-30">Development</h6>
                                    <ul>
                                        <li><a href="#">Productivity</a></li>
                                        <li><a href="#">Graphic Design</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">UI/UX Design</a></li>
                                        <li><a href="#">Creative Writing</a></li>
                                    </ul>
                                </div>
                                <div class="col-md">
                                    <h6>Business</h6>
                                    <ul>
                                        <li><a href="#">Animation</a></li>
                                        <li><a href="#">Creative Writing</a></li>
                                        <li><a href="#">Film &amp; Video</a></li>
                                        <li><a href="#">Fine Art</a></li>
                                        <li><a href="#">Graphic Design</a></li>
                                    </ul>

                                    <h6 class="mt-30">Marketing</h6>
                                    <ul>
                                        <li><a href="#">Illustration</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">UI/UX Design</a></li>
                                        <li><a href="#">Web Development</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="align-items-center col-lg-6 col-md-12 d-flex megamenu-cta">
                            <div class="col-12 text-center">
                                    <h3 class="mb-10">Become a Tutor</h3>
                                    <p class="mb-30">Experience a level of our quality in both design &amp; customization works.</p>
                                    <a class="btn btn-primary h-100 mr-10 mt-md-0 mt-sm-20" href="edit-profile.php">Become a Tutor</a>
                                </div>
                            <div class="bg-wrap">
                                <div class="bg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-wrap">
                        <div class="bg"></div>
                    </div>
                </div>
            </li>
        </ul>

        <form action="#" class="search d-sm-none d-md-none d-lg-block" >
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-link dark"><img class="svg icon" alt="" src="assets/images/icons/outline-search-24px.svg"></button>
                    </div>
                    <input type="search" class="form-control" placeholder="What do you want to learn?">
                </div>
            </div>
        </form>

        <?php include 'head_checkv0.php'; ?>
    </div>
</nav>