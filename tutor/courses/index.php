<?php
$title = 'Courses';
$activenav = 'Courses';
require_once '../inc/header.php';
require_once '../inc/sidebar.php';
require_once '../inc/nav.php';
?>

<div class="header-actions">
    <div class="first-row">
        <div>
            <h1 class="page-title">Courses</h1>
        </div>
        <div>
            <a class="btn btn-primary-sm" href="#" data-toggle="modal" data-target="#create-course">Add Course</a>
        </div>
    </div>
    <div class="second-row">
        <div>
            <form action="#" class="form-inline search w-100 align-items-center">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-link dark"><img class="svg icon" alt="" src="../../assets/images/icons/outline-search-24px.svg"></button>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Courses">
                    </div>
                </div>
            </form>
        </div>
        <div>
            <ul class="nav tabs">
                <li class="tab tab-secondary">
                    <a class="active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><span>Active</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a class=""  data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false"><span>Drafts</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a class=""  data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false"><span>Archived</span></a>
                </li>                
            </ul>
        </div>
    </div>
</div>
<div id="main" class="">
    <div class="row no-gutters">
        <div class="col-12">
        </div>
    </div>

    <div class="row no-gutters">
        <div class="col-lg-12">
            <div class="courses pb-50">
                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/1.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/2.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/3.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/4.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/5.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/6.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/7.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/8.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/1.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/2.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/3.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/4.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>

                <div class="tutor-courses course">
                    <div class="course-actions">
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                        <a href="#"><img width="20px" src="../../assets/images/icons/options.svg" class="svg icon" alt=""></a>
                    </div>
                    <a href="#" class="course-img-link">
                        <img class="course-img" src="../../assets/images/courses/5.jpg" alt="image">
                    </a>
                    <div class="course-details">
                        <a href="#">
                            <!-- <h2 class="mb-0">Become a UX Designer Learn the Skills & Get Designer Learn the Designer Learn.</h2> -->
                            <h2>Become a UX Designer Learn the Skills & Get...</h2>
                        </a>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/graduate.svg" class="svg icon mr-10" alt="">36 Students</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/certificate.svg" class="svg icon mr-10" alt="">3 Chapters, 30 Lessons</p>
                        <p class="course-info"><img width="20px" src="../../assets/images/icons/tag.svg" class="svg icon mr-10" alt=""><a href="#">Technology</a>, <a href="#">Design</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="align-items-center col-lg-4 col-md-6 col-sm-12 d-flex">
            <div class="col-12 h-100 no-gutters pb-50 text-center w-100">
                <a href="#" data-toggle="modal" data-target="#create-course" class="h-100"><button class="tutor-courses empty inline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none" class="svg icon replaced-svg">
                        <path d="M8.38235 0H6.61765V15H8.38235V0Z" fill="white"></path>
                        <path d="M0 6.61765L7.71378e-08 8.38235L15 8.38235V6.61765L0 6.61765Z" fill="white"></path>
                    </svg>
                    <h4>Create course</h4>
                </button></a>
            </div>
        </div> -->
    </div>
    <div class="row no-gutters">
        <div class="col-12">
            <!-- <a href="#" class="tutor-courses empty">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none" class="svg icon replaced-svg">
                <path d="M8.38235 0H6.61765V15H8.38235V0Z" fill="white"></path>
                <path d="M0 6.61765L7.71378e-08 8.38235L15 8.38235V6.61765L0 6.61765Z" fill="white"></path>
                </svg>
                <h4>Click here to add a course</h4>
            </a> -->
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</div>
<?php require_once '../inc/footer.php'; ?>
</section>
<?php require_once '../inc/scripts.php'; ?>
<div class="modal-container">
    <div class="modal fade" id="create-course" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content zoom">
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <img width="20px" src="../../assets/images/icons/x.svg" class="svg icon" alt="">
                </button>
                <div class="align-items-center modal-body no-gutters row">
                    <div class="bg-box col-md-6 create-course-bg" style=""></div>
                    <div class="col-md-6 create-course-form">
                        <h4 class="mb-30">Add Course</h4>
                        <form action="new/" class="form-vertical" id="create-course-form" novalidate="novalidate">
                            <div class="no-gutters row">
                                <div class="col-12 mb-30 form-group">
                                    <label for="course-name">Course Name</label>
                                    <input autofocus="" type="text" class="form-control" placeholder="eg: Learn Figma" id="course-name" name="course-name" required="">
                                </div>
                            </div>
                            <div class="no-gutters row">
                                <div class="col-12 mb-30 form-group">
                                    <label for="username">Course Description</label>
                                    <textarea autofocus="" type="text" class="form-control" placeholder="eg: Learn Figma" id="course-description" name="course-description" required="" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="no-gutters row">
                                <div class="col-12">
                                    <input type="submit" class="btn btn-block btn-primary-sm col-lg-auto d-block" value="Save and continue">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bg-wrap">
                    <div class="bg"></div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>