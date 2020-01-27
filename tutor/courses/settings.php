<?php
$title = 'Courses';
$activenav = 'Courses';
require_once '../inc/header.php';
require_once '../inc/sidebar.php';
require_once '../inc/nav.php';
?>

<div id="main" class="settings hide">
    <section id="settings">
        <div class="row align-items-center mb-30">
            <div class="col-lg-auto col-md-12">
                <p class="text-body spaced-text mb-0">Edit Course</p>
                <h4 class="mb-0 text-heading">Introduction to Web Design</h4>
            </div>
            <div class="align-items-center col-lg-auto col-md-12 d-flex ml-auto ml-lg-auto ml-md-0 mt-lg-0 mt-sm-20">
                <!-- <a class="btn btn-danger-sm with-icon icon-left col-lg-auto col-md-6 d-block" href="#"><img src="../../../assets/images/icons/delete.svg" class="svg icon" alt="">Delete</a> -->
                <input type="submit" class="btn btn-secondary-sm col-lg-auto col-md-6 d-block" value="Cancel">
                <input type="submit" class="btn btn-primary-sm col-lg-auto col-md-6 d-block" value="Save">
            </div>
        </div>
        <div class="mb-30 w-100">
            <ul class="nav tabs">
                <li class="tab tab-secondary">
                    <a class="active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><span>Course Details</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a class=""  data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false"><span>Course Media</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a class=""  data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false"><span>Pricing</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a class=""  data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false"><span>Course Content</span></a>
                </li>                
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="">
                    <section id="tab-title" class="mb-50">
                        <div class="row align-items-center">
                            <div class="col-lg align-items-center">
                                <h5 class="mb-0 text-heading">Course Details</h5>
                                <p class="text-body">Update the course name, description and URL.</p>
                            </div>
                        </div>
                        <div class="bg-wrap">
                            <div class="bg"></div>
                        </div>
                    </section>

                    <section id="tab-title">
                        <div class="row">
                            <div class="col-lg form-group mb-50">
                                <label for="fname">Course Name</label>
                                <input type="text" class="form-control" placeholder="eg: Introduction to Web Design" value="Introduction to Web Design" name="fname" id="fname" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg form-group mb-50">
                                <label for="fname">Course Description</label>
                                <textarea rows="5" class="form-control" placeholder='A short description about this course.' value="See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette." style="resize: none;"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg form-group mb-50">
                                <label for="fname">Course URL</label>
                                <input type="text" class="form-control" placeholder="eg: Introduction to Web Design" value="introduction-to-web-design" name="fname" id="fname" required="">
                                <p class="mt-20 text-form mb-0">https://motute.com/courses/introduction-to-web-design</p>
                            </div>
                        </div>
                        
                        <div class="row align-items-center mt-50">
                            <div class="col-lg align-items-center">
                                <h5 class="mb-10 text-heading">Delete Course</h5>
                                <p class="text-body mb-20">Make sure you’re really wan to do this because once you delete a course, it cannot be recovered.<br>A course can only be deleted if it has no students.</p>
                                <button type="button" class="btn btn-danger"><img width="20px" src="../../assets/images/icons/delete.svg" class="svg icon mr-10" alt="">Delete Course</button>
                            </div>
                        </div>
                        <div class="bg-wrap">
                            <div class="bg"></div>
                        </div>
                    </section>
                </form>
            </div>
            <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <section id="tab-title" class="pb-50">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h1 class="mb-0 text-heading">Account Settings</h1>
                                <p class="text-body-lg">Update your account settings and change your password.</p>
                            </div>
                        </div>
                        <div class="bg-wrap">
                            <div class="bg"></div>
                        </div>
                    </section>

                    <section id="tab-title" class="pb-50"> 
                        <form action="">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="fname">Email Address</label>
                                    <input type="text" class="form-control" placeholder="eg: johndoe@gmail.com" value="mekkie@yahoo.com" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md form-group mt-30">
                                    <input type="password" class="form-control" placeholder="Enter Your Password" required="">
                                </div>
                                <div class="col-auto form-group mt-30 pl-md-15 pl-sm-30">
                                    <input type="submit" class="btn btn-block btn-secondary h-100 mr-10 mt-md-0 mt-sm-10" value="Change Email">
                                </div>
                            </div>
                        </form>


                        <div class="line mt-50 mb-50"></div>


                        <form action="">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="fname">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Current Password" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md form-group mt-30">
                                    <input type="password" class="form-control" placeholder="Enter New Password" required="">
                                </div>
                                <div class="col-auto form-group mt-30 pl-md-15 pl-sm-30">
                                    <input type="submit" class="btn btn-block btn-secondary h-100 mr-10 mt-md-0 mt-sm-10" value="Change Password">
                                </div>
                            </div>
                        </form>

                    </section>
                </div>
            </div>
        </div>
        <div class="bg-wrap">
            <div class="bg"></div>
        </div>
    </section>
</div>
<?php require_once '../inc/footer.php'; ?>
</section>
<?php require_once '../inc/scripts.php'; ?>

<script>
    var cw = $('.user-pic-div').height();
    $('.user-pic').css({
        'width': cw + 'px'
    });
</script>
</body>
</html>