<?php
$title = 'Add New Course';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?> — Motute</title>
    <link rel="icon" href="../../../favicon.ico">
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
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/custom.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">

</head>

<body class="body create">
    <nav id="nav" class="main navbar create">
        <div class="no-gutters row w-100 align-items-center">
            <div class="col-auto border-right">
                <a class="btn header-btn icon-only" href="#"><img src="../../../assets/images/icons/arrow-left.svg" class="svg icon" alt=""></a>
            </div>
            <div class="col-auto">
                <a class="btn header-btn icon-only menu" href="#"><img src="../../../assets/images/icons/menu.svg" class="svg icon" alt=""></a>
            </div>
            <div class="col-lg col-md-auto col-sm-auto mr-auto h-100">
                <div class="header-title">
                    <h6 class="mb-0">Figma to HTML</h6>
                    <!-- <p class="text-body mb-0">Edit details about your new course before you publish.</p> -->
                </div>
            </div>
            <div class="col-auto border-left">
                <a class="header-btn btn with-icon icon-right" href="#">
                    <h6 class="mb-0">Save</h6><img src="../../../assets/images/icons/save.svg" class="svg icon" alt="">
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
                            <a href="#" class="chapter-move"><img width="20px" src="../../../assets/images/icons/drag.svg" class="svg icon" alt=""></a>
                            <div class="chapter-title-text">
                                <h5>Introduction</h5>
                                <p>3 Lessons</p>
                            </div>
                            <a href="#" class="chapter-settings-btn"><img width="20px" src="../../../assets/images/icons/edit.svg" class="svg icon" alt=""></a>
                            <a class="expand collapsed" data-toggle="collapse" href="#chapter-1" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-1">
                                <img width="20px" src="../../../assets/images/icons/arrows/chevron-up.svg" class="svg icon" alt="">
                            </a>
                        </div>
                        <div id="chapter-1" class="chapter-content collapse show" role="tabpanel" style="">
                            <div class="lessons">
                                <div class="lesson video" data-tippy-content="Database Models">Message from the instructor</div>
                                <div class="lesson text" data-tippy-content="Database Models">How to Use the Mini-Course Template</div>
                                <div class="lesson audio" data-tippy-content="Database Models">The proven benefits of this course</div>
                                <div class="lesson download" data-tippy-content="Database Models">Before we begin...</div>
                                <div class="lesson exam" data-tippy-content="Database Models">Why is the web, the web?</div>
                            </div>
                        </div>
                        <div id="chapter-types-1" class="lesson-types no-gutters row collapse" role="tabpanel">
                            <div class="col-3">
                                <a href="#" class="lesson-type type-video"><img src="../../../assets/images/icons/video.svg" class="svg icon" alt=""><p>Video</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-text"><img src="../../../assets/images/icons/text.svg" class="svg icon" alt=""><p>Text</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-audio"><img src="../../../assets/images/icons/audio.svg" class="svg icon" alt=""><p>Audio</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-download"><img src="../../../assets/images/icons/download.svg" class="svg icon" alt=""><p>Download</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-exam"><img src="../../../assets/images/icons/exam.svg" class="svg icon" alt=""><p>Exam</p></a>
                            </div>
                        </div>
                        <a class="btn with-icon icon-left btn-block btn-chapter" class="expand collapsed" data-toggle="collapse" href="#chapter-types-1" data-parent=".chapter" aria-expanded="false" aria-controls="chapter-types-1">
                            <img src="../../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson
                        </a>
                    </div>
                    <div class="chapter">
                        <div class="chapter-title">
                            <a href="#" class="chapter-move"><img width="20px" src="../../../assets/images/icons/drag.svg" class="svg icon" alt=""></a>
                            <div class="chapter-title-text">
                                <h5>Welcome to Web Design: HTML Fundamentals</h5>
                                <p>3 Lessons</p>
                            </div>
                            <a href="#" class="chapter-settings-btn"><img width="20px" src="../../../assets/images/icons/edit.svg" class="svg icon" alt=""></a>
                            <a class="expand collapsed" data-toggle="collapse" href="#chapter-2" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-2">
                                <img width="20px" src="../../../assets/images/icons/arrows/chevron-up.svg" class="svg icon" alt="">
                            </a>
                        </div>
                        <div id="chapter-2" class="chapter-content collapse" role="tabpanel" style="">
                            <div class="lessons">
                                <div class="lesson video" data-tippy-content="Database Models">The proven benefits of this course</div>
                                <div class="lesson text" data-tippy-content="Database Models">Before we begin...</div>
                            </div>
                        </div>
                        <div id="chapter-types-2" class="lesson-types no-gutters row collapse" role="tabpanel">
                            <div class="col-3">
                                <a href="#" class="lesson-type type-video"><img src="../../../assets/images/icons/video.svg" class="svg icon" alt=""><p>Video</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-text"><img src="../../../assets/images/icons/text.svg" class="svg icon" alt=""><p>Text</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-audio"><img src="../../../assets/images/icons/audio.svg" class="svg icon" alt=""><p>Audio</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-download"><img src="../../../assets/images/icons/download.svg" class="svg icon" alt=""><p>Download</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-exam"><img src="../../../assets/images/icons/exam.svg" class="svg icon" alt=""><p>Exam</p></a>
                            </div>
                        </div>
                        <a class="btn with-icon icon-left btn-block btn-chapter" class="expand collapsed" data-toggle="collapse" href="#chapter-types-2" data-parent=".chapter" aria-expanded="false" aria-controls="chapter-types-2">
                            <img src="../../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson
                        </a>
                    </div>
                    <div class="chapter">
                        <div class="chapter-title">
                            <a href="#" class="chapter-move"><img width="20px" src="../../../assets/images/icons/drag.svg" class="svg icon" alt=""></a>
                            <div class="chapter-title-text">
                                <h5>HTML fundamentals</h5>
                                <p>3 Lessons</p>
                            </div>
                            <a href="#" class="chapter-settings-btn"><img width="20px" src="../../../assets/images/icons/edit.svg" class="svg icon" alt=""></a>
                            <a class="expand collapsed" data-toggle="collapse" href="#chapter-3" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-3">
                                <img width="20px" src="../../../assets/images/icons/arrows/chevron-up.svg" class="svg icon" alt="">
                            </a>
                        </div>
                        <div id="chapter-3" class="chapter-content collapse" role="tabpanel" style="">
                            <div class="lessons">
                                <div class="lesson video" data-tippy-content="Database Models">Why is the web, the web?</div>
                                <div class="lesson video" data-tippy-content="Database Models">What is markup?</div>
                                <div class="lesson text" data-tippy-content="Database Models">Tags: the building blocks</div>
                            </div>
                        </div>
                        <div id="chapter-types-3" class="lesson-types no-gutters row collapse" role="tabpanel">
                            <div class="col-3">
                                <a href="#" class="lesson-type type-video"><img src="../../../assets/images/icons/video.svg" class="svg icon" alt=""><p>Video</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-text"><img src="../../../assets/images/icons/text.svg" class="svg icon" alt=""><p>Text</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-audio"><img src="../../../assets/images/icons/audio.svg" class="svg icon" alt=""><p>Audio</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-download"><img src="../../../assets/images/icons/download.svg" class="svg icon" alt=""><p>Download</p></a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="lesson-type type-exam"><img src="../../../assets/images/icons/exam.svg" class="svg icon" alt=""><p>Exam</p></a>
                            </div>
                        </div>
                        <a class="btn with-icon icon-left btn-block btn-chapter" class="expand collapsed" data-toggle="collapse" href="#chapter-types-3" data-parent=".chapter" aria-expanded="false" aria-controls="chapter-types-3">
                            <img src="../../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson
                        </a>
                    </div>
                    <!-- <div class="chapter">
                        <div class="chapter-title">
                            <a href="#" class="chapter-move"><img width="20px" src="../../../assets/images/icons/drag.svg" class="svg icon" alt=""></a>
                            <div class="chapter-title-text">
                                <h5>Welcome to Web Design: HTML Fundamentals</h5>
                                <p>3 Lessons</p>
                                </div>
                                <a class="expand collapsed" data-toggle="collapse" href="#chapter-3" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-3">
                                    <img width="20px" src="../../../assets/images/icons/arrows/chevron-up.svg" class="svg icon" alt="">
                                </a>
                        </div>
                        <div id="chapter-4" class="chapter-content collapse" role="tabpanel" style="">
                            <div class="lessons">
                                <div class="lesson video" data-tippy-content="Database Models">The proven benefits of this course</div>
                                <div class="lesson text" data-tippy-content="Database Models">Before we begin...</div>
                            </div>
                        </div>
                        <a class="btn with-icon icon-left btn-block btn-chapter" href="#"><img src="../../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson</a>
                    </div>
                    <div class="chapter">
                        <div class="chapter-title">
                            <a href="#" class="chapter-move"><img width="20px" src="../../../assets/images/icons/drag.svg" class="svg icon" alt=""></a>
                            <div class="chapter-title-text">
                                <h5>HTML fundamentals</h5>
                                <p>3 Lessons</p>
                                </div>
                                <a class="expand collapsed" data-toggle="collapse" href="#chapter-3" data-parent="#chapters" aria-expanded="false" aria-controls="chapter-3">
                                    <img width="20px" src="../../../assets/images/icons/arrows/chevron-up.svg" class="svg icon" alt="">
                                </a>
                        </div>
                        <div id="chapter-5" class="chapter-content collapse" role="tabpanel" style="">
                            <div class="lessons">
                                <div class="lesson video" data-tippy-content="Database Models">Why is the web, the web?</div>
                                <div class="lesson video" data-tippy-content="Database Models">What is markup?</div>
                                <div class="lesson text" data-tippy-content="Database Models">Tags: the building blocks</div>
                            </div>
                        </div>
                        <a class="btn with-icon icon-left btn-block btn-chapter" href="#"><img src="../../../assets/images/icons/plus.svg" class="svg icon" alt="">Add Lesson</a>
                    </div> -->
                </ul>
                <div class="chapter-actions">
                    <a class="add-chapter btn btn-block btn-primary-sm" href="#">Add Chapter</a>
                </div>
            </div>
        </div>
        <div class="body create">
            <div class="col-12 no-gutters">
                <div id="body-container">
                    <?php //include 'add/chapter.php'; ?>
                    <?php include 'edit/chapter.php'; ?>
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
    </div>
    <?php require_once '../../inc/scripts.php'; ?>
    
</body>

</html>
