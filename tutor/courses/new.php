<?php
$title = 'Add New Course';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?> — Motute</title>
    <link rel="icon" href="../../favicon.ico">
    <meta name="theme-color" content="#FB840D">

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
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">

</head>

<body class="body create">
    <section id="body">
        <nav id="nav" class="main navbar create">
            <div class="no-gutters row w-100 align-items-center">
                <div class="col-auto border-right">
                    <a class="header-btn btn with-icon icon-left" href="#"><img src="../../assets/images/icons/arrow-left.svg" class="svg icon" alt="">
                        <h6 class="mb-0">Back</h6>
                    </a>
                </div>
                <div class="col-auto border-right">
                    <a class="header-btn menu btn with-icon icon-left" href="#"><img src="../../assets/images/icons/menu.svg" class="svg icon" alt="">
                        <h6 class="mb-0">Sidebar</h6>
                    </a>
                </div>
                <div class="col-lg col-md-auto col-sm-auto mr-auto h-100">
                    <div class="header-title">
                        <h6 class="mb-0">Figma to HTML</h6>
                        <!-- <p class="text-body mb-0">Edit details about your new course before you publish.</p> -->
                    </div>
                </div>
                <div class="col-auto border-left">
                    <a class="header-btn btn with-icon icon-right" href="#">
                        <h6 class="mb-0">Save</h6><img src="../../assets/images/icons/save.svg" class="svg icon" alt="">
                    </a>
                </div>
            </div>
            <div class="bg-wrap">
                <div class="bg"></div>
            </div>
        </nav>
        <div id="main" class="create">
            <div class="d-flex side create">
                <div class="col-12 no-gutters">
                    <ul id="chapters" class="nav" data-children=".chapter">
                        <div class="chapter">
                            <div class="chapter-title">
                                <a class="active" data-toggle="tab" href="#chapter1" role="tab" aria-controls="chapter1-tab" aria-selected="true">Introduction</a>
                                <div class="expand" data-toggle="collapse" href="#chapter-1" data-parent="#chapters" aria-expanded="true" aria-controls="chapter-1"></div>
                            </div>
                            <div id="chapter-1" class="chapter-content collapse show" role="tabpanel" style="">
                                <div class="lessons">
                                    <div class="lesson text" data-tippy-content="Database Models">How to Use the Mini-Course Template</div>
                                    <div class="lesson video" data-tippy-content="Database Models">Message from the instructor</div>
                                </div>
                            </div>
                            <a class="btn with-icon icon-left btn-block btn-chapter" href="#"><img src="../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson</a>
                        </div>
                        <div class="chapter">
                            <div class="chapter-title">
                                <a class="" data-toggle="tab" href="#chapter2" role="tab" aria-controls="chapter2-tab" aria-selected="false">Welcome to Web Design: HTML Fundamentals</a>
                                <div class="expand collapsed" data-toggle="collapse" href="#chapter-2" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-2"></div>
                            </div>
                            <div id="chapter-2" class="chapter-content collapse" role="tabpanel" style="">
                                <div class="lessons">
                                    <div class="lesson video" data-tippy-content="Database Models">The proven benefits of this course</div>
                                    <div class="lesson text" data-tippy-content="Database Models">Before we begin...</div>
                                </div>
                            </div>
                            <a class="btn with-icon icon-left btn-block btn-chapter" href="#"><img src="../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson</a>
                        </div>
                        <div class="chapter">
                            <div class="chapter-title">
                                <a class="" data-toggle="tab" href="#chapter3" role="tab" aria-controls="chapter3-tab" aria-selected="false">HTML fundamentals</a>
                                <div class="expand collapsed" data-toggle="collapse" href="#chapter-3" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-3"></div>
                            </div>
                            <div id="chapter-3" class="chapter-content collapse" role="tabpanel" style="">
                                <div class="lessons">
                                    <div class="lesson video" data-tippy-content="Database Models">Why is the web, the web?</div>
                                    <div class="lesson video" data-tippy-content="Database Models">What is markup?</div>
                                    <div class="lesson text" data-tippy-content="Database Models">Tags: the building blocks</div>
                                </div>
                            </div>
                            <a class="btn with-icon icon-left btn-block btn-chapter" href="#"><img src="../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson</a>
                        </div>
                        <div class="chapter">
                            <div class="chapter-title">
                                <a class="" data-toggle="tab" href="#chapter4" role="tab" aria-controls="chapter4-tab" aria-selected="false">Welcome to Web Design: HTML Fundamentals</a>
                                <div class="expand collapsed" data-toggle="collapse" href="#chapter-4" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-4"></div>
                            </div>
                            <div id="chapter-4" class="chapter-content collapse" role="tabpanel" style="">
                                <div class="lessons">
                                    <div class="lesson video" data-tippy-content="Database Models">The proven benefits of this course</div>
                                    <div class="lesson text" data-tippy-content="Database Models">Before we begin...</div>
                                </div>
                            </div>
                            <a class="btn with-icon icon-left btn-block btn-chapter" href="#"><img src="../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson</a>
                        </div>
                        <div class="chapter">
                            <div class="chapter-title">
                                <a class="" data-toggle="tab" href="#chapter5" role="tab" aria-controls="chapter5-tab" aria-selected="false">HTML fundamentals</a>
                                <div class="expand collapsed" data-toggle="collapse" href="#chapter-5" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-5"></div>
                            </div>
                            <div id="chapter-5" class="chapter-content collapse" role="tabpanel" style="">
                                <div class="lessons">
                                    <div class="lesson video" data-tippy-content="Database Models">Why is the web, the web?</div>
                                    <div class="lesson video" data-tippy-content="Database Models">What is markup?</div>
                                    <div class="lesson text" data-tippy-content="Database Models">Tags: the building blocks</div>
                                </div>
                            </div>
                            <a class="btn with-icon icon-left btn-block btn-chapter" href="#"><img src="../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson</a>
                        </div>
                    </ul>
                    <div class="chapter-actions">
                        <a class="btn btn-block btn-primary-sm" href="#">Add Chapter</a>
                    </div>
                </div>
            </div>

            <div class="body create">
                <div class="col-12 no-gutters">
                    <div id="body-container">
                        <div id="body-header">
                            <div class="row align-items-center">
                                <div class="col-lg-auto col-md-12">
                                    <p class="text-body spaced-text">Add Chapter</p>
                                    <h4 class="mb-0 text-heading">Welcome to Web Design: HTML Fundamentals</h4>
                                </div>
                                <div class="align-items-center col-lg-auto col-md-12 d-flex ml-auto ml-lg-auto ml-md-0">
                                    <!-- <a class="btn btn-danger-sm with-icon icon-left col-lg-auto col-md-6 d-block mt-md-0 mt-sm-20" href="#"><img src="../../assets/images/icons/delete.svg" class="svg icon" alt="">Delete</a> -->
                                    <input type="submit" class="btn btn-secondary-sm col-lg-auto col-md-6 d-block mt-md-0 mt-sm-20" value="Cancel">
                                    <input type="submit" class="btn btn-primary-sm col-lg-auto col-md-6 d-block mt-md-0 mt-sm-20" value="Save">
                                </div>
                            </div>
                        </div>
                        <div id="body-content">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="fname">Chapter Name</label>
                                        <input type="text" class="form-control" placeholder="eg: HTML Fundamentals" value="Welcome to Web Design: HTML Fundamentals" required="">
                                    </div>
                                </div>
                                <div class="line mt-50 mb-50"></div>
                            </form>
                        </div>
                    </div>
                    <footer id="footer" class="create">
                        <div class="row no-gutters">
                            <div class="col-auto mr-auto"><p>Copyright © 2019 <a href="#">Motute, Inc.</a></p></div>
                            <div class="col-auto ml-auto d-flex">
                                <a href="#" class="mr-20">Privacy</a>
                                <a href="#">Terms</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        </div>
    </section>


    <?php require_once '../inc/scripts.php'; ?>
</body>

</html>
