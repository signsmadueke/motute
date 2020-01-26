</section>
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
                        <form action="new/" class="form-vertical mb-20" id="create-course-form" novalidate="novalidate">
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
                                    <input type="submit" class="btn btn-block btn-primary-sm col-lg-auto col-md-6 d-block" value="Save and continue">
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
<?php require_once 'scripts.php'; ?>

<script>
    var cw = $('.user-pic-div').height();
    $('.user-pic').css({
        'width': cw + 'px'
    });
</script>
</body>

</html>