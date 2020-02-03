<?php
    $title = 'Settings';
    $activenav = 'Settings';
    require_once '../inc/header.php';
?>
<style>
    .page-title {
        margin-bottom: 0;
    }

    .header-actions .container {
        display: grid;
        grid-template-rows: auto auto;
        grid-column-gap: 30px;
        grid-row-gap: 20px;
        -webkit-box-align: center;
        align-items: center;
    }

    .header-actions .first-row {
        display: grid;
        grid-template-columns: auto 1fr;
        grid-column-gap: 30px;
        -webkit-box-align: center;
        align-items: center;
    }

    .header-actions .first-row div:nth-child(2) {
        justify-self: right;
        display: grid;
        grid-template-columns: auto auto;
        grid-column-gap: 10px;
    }

    .header-actions .second-row {
        display: grid;
        grid-template-columns: 1fr auto;
        grid-column-gap: 30px;
        -webkit-box-align: center;
        align-items: center;
    }

    .header-actions .tabs .tab {
        margin: 0 5px;
    }

    .header-actions .tabs .tab a {
        font-size: 12px;
    }

    .header-actions .tabs .tab a span {
        margin: 0;
    }

    @media (max-width: 768px) {

        .header-actions .first-row {
            display: grid;
            grid-template-columns: auto;
            grid-row-gap: 20px;
        }

        .header-actions .first-row div:nth-child(2) {
            justify-self: left;
        }

        .header-actions .nav.tabs {
            width: calc(100vw - 60px);
        }
    }
</style>
</head>

<?php
    require_once '../inc/sidebar.php';
    require_once '../inc/nav.php';
?>

<div class="header-actions">
    <div class="container">
        <div class="first-row">
            <div class="">
                <p class="text-body spaced-text mb-0">Edit Course</p>
                <h4 class="mb-0 text-heading">Introduction to Web Design</h4>
            </div>
            <div class="">
                <input type="submit" class="btn btn-primary-sm d-block ml-0" value="Save">
                <input type="submit" class="btn btn-secondary-sm d-block ml-0" value="Cancel">
            </div>
        </div>
        <ul class="nav tabs">
            <li class="tab tab-secondary">
                <a class="active" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true"><span>Course Details</span></a>
            </li>
            <li class="tab tab-secondary">
                <a class=""  data-toggle="tab" href="#media" role="tab" aria-controls="media" aria-selected="false"><span>Course Media</span></a>
            </li>
            <li class="tab tab-secondary">
                <a class=""  data-toggle="tab" href="#pricing" role="tab" aria-controls="pricing" aria-selected="false"><span>Pricing</span></a>
            </li>
            <li class="tab tab-secondary">
                <a class="" href="new/"><span>Course Content</span></a>
            </li>                
        </ul>
    </div>
</div>

<div id="main" class="settings hide">
    <section id="settings" class="container">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="details" role="tabpanel" aria-labelledby="details-tab">
                <form action="">
                    <div>
                        <h5 class="mb-0 text-heading">Course Details</h5>
                        <p class="text-body mb-0">Update the course name, description and URL.</p>
                    </div>

                    <div class="form-group">
                        <label for="fname">Course Name</label>
                        <input type="text" class="form-control" placeholder="eg: Introduction to Web Design" value="Introduction to Web Design" name="fname" id="fname" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="fname">Course Description</label>
                        <textarea rows="5" class="form-control" placeholder='A short description about this course.' value="See-through delicate embroidered organza blue lining luxury acetate-mix stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning silhouette." style="resize: none;"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="fname">Course URL</label>
                        <input type="text" class="form-control" placeholder="eg: Introduction to Web Design" value="introduction-to-web-design" name="fname" id="fname" required="">
                        <p class="mt-20 text-form mb-0">https://motute.com/courses/introduction-to-web-design</p>
                    </div>
                    
                    <div>
                        <h5 class="mb-10 text-heading">Delete Course</h5>
                        <p class="text-body mb-20">Make sure you’re really wan to do this because once you delete a course, it cannot be recovered.<br>A course can only be deleted if it has no students.</p>
                        <button type="button" class="btn btn-danger"><img width="20px" src="../../assets/images/icons/delete.svg" class="svg icon mr-10" alt="">Delete Course</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                <form action="">
                    <div>
                        <h5 class="mb-0 text-heading">Course Media</h5>
                        <p class="text-body mb-0">Update the course image, preview video.</p>
                    </div>

                    <div class="form-group">
                        <label for="fname">Course Image</label>
                        <div class="course-display-picture" style="background-image: url(../../assets/images/courses/1.jpg);">
                        </div>
                        <div class="edit-display-picture">
                            <a href="#" class="btn">Upload</a>
                            <div></div>
                            <a href="#" class="btn"><img width="20px" src="../../assets/images/icons/delete.svg" class="svg icon" alt=""></a>
                        </div>
                        <p class="text-form">Suggested Dimensions: 760x420px</p>
                    </div>

                    <div class="form-group">
                        <label for="fname">Course Video</label>
                        <div class="course-display-picture" style="background-image: url(../../assets/images/courses/3.jpg);">
                        </div>
                        <div class="edit-display-picture">
                            <a href="#" class="btn">Upload</a>
                            <div></div>
                            <a href="#" class="btn"><img width="20px" src="../../assets/images/icons/delete.svg" class="svg icon" alt=""></a>
                        </div>
                        <p class="text-form">Suggested Dimensions: 760x420px</p>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pricing" role="tabpanel" aria-labelledby="pricing-tab">
                <form action="">
                    <div>
                        <h5 class="mb-0 text-heading">Pricing</h5>
                        <p class="text-body mb-0">Choose how you’ll like to get paid.</p>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <label class="check">Make course free
                                <input type="checkbox" id="checkbox" required="" checked="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fname">Fixed Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">₦</span></div>
                            <input type="text" class="form-control" placeholder="" value="48,000">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="mb-30">
                            <h5 class="mb-0 text-heading">Banks</h5>
                            <p class="text-body mb-0">Withdrawals will be paid into this bank account.</p>
                        </div>
                        <div class="bank-accounts">
                            <div class="bank-account-choice">
                                <label class="check">
                                    <input type="radio" name="bank-input" checked>
                                    <div class="bank checkmark">
                                        <div class="radio-box">
                                            <img class="svg icon" alt="" src="../../assets/images/icons/checkmark.svg">
                                        </div>
                                        <h6 class="account-name">SIGNS CHUKWUEBUKA MADUEKE</h6>
                                        <div class="grid">
                                            <p class="account-number">9906016555</p>
                                            <p class="bank-name">Providus Bank</p>
                                        </div>
                                        <div class="bank-bg">
                                            <img class="svg icon" alt="" src="../../assets/images/svgs/bank-bg.svg">
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="bank-account-choice">
                                <label class="check">
                                    <input type="radio" name="bank-input">
                                    <div class="bank checkmark">
                                        <div class="radio-box">
                                            <img class="svg icon" alt="" src="../../assets/images/icons/checkmark.svg">
                                        </div>
                                        <h6 class="account-name">SIGNS CHUKWUEBUKA MADUEKE</h6>
                                        <div class="grid">
                                            <p class="account-number">9906016555</p>
                                            <p class="bank-name">Providus Bank</p>
                                        </div>
                                        <div class="bank-bg">
                                            <img class="svg icon" alt="" src="../../assets/images/svgs/bank-bg.svg">
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
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