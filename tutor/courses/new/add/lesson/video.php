<div id="body-header" class="animated fadeInUp faster">
    <div class="row align-items-center">
        <div class="col-lg-auto col-md-12">
            <p class="text-body spaced-text">Add Lesson</p>
            <h4 class="mb-0 text-heading">Video</h4>
        </div>
        <div class="align-items-center col-lg-auto col-md-12 d-flex ml-auto ml-lg-auto ml-md-0 mt-lg-0 mt-sm-20">
            <!-- <a class="btn btn-danger-sm with-icon icon-left col-lg-auto col-md-6 d-block" href="#"><img src="../../../assets/images/icons/delete.svg" class="svg icon" alt="">Delete</a> -->
            <input type="submit" class="btn btn-secondary-sm col-lg-auto col-md-6 d-block" value="Cancel">
            <input type="submit" class="btn btn-primary-sm col-lg-auto col-md-6 d-block" value="Save">
        </div>
    </div>
</div>
<div id="body-content" class="animated fadeInUp faster">
    <form action="">
        <div class="row">
            <div class="col-12 form-group">
                <label for="fname">Lesson Name</label>
                <input type="text" class="form-control" placeholder="eg: HTML Fundamentals" value="" required="">
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12 form-group mt-50">
            <form action="/file-upload" class="dropzone" id="video-dropzone">
                <h5 class="mb-20 text-heading">Upload Video</h5>
                <div class="dropzone-previews tutor-courses empty inline text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none" class="svg icon replaced-svg">
                        <path d="M8.38235 0H6.61765V15H8.38235V0Z" fill="white"></path>
                        <path d="M0 6.61765L7.71378e-08 8.38235L15 8.38235V6.61765L0 6.61765Z" fill="white"></path>
                    </svg>
                    <h4>Drop files here or click to upload.</h4>
                    <p class="text-body">(This is just a demo dropzone. Selected files are not actually uploaded)</p>
                </div>
            </form>
        </div>
    </div>
</div>