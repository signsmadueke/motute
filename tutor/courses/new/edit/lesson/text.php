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
                <label for="fname">Chapter Name</label>
                <input type="text" class="form-control" placeholder="eg: HTML Fundamentals" value="" required="">
            </div>
            <div class="col-12 form-group mt-30">
                <label class="toggle">
                    <input type="checkbox" checked="">Toggle on
                    <span></span>
                </label>
            </div>
            <div class="col-12 form-group mt-30">
                <label class="toggle">
                    <input type="checkbox" checked="">Toggle on
                    <span></span>
                </label>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12 form-group mt-50">
            <form action="/file-upload" class="dropzone" id="video-dropzone">
                <h5 class="mb-0 text-heading">Upload Video</h5>
                <div class="dropzone-previews">
                    <div>
                        <h4>Drop files here or click to upload.</h4>
                        <div class="text-body">(This is just a demo dropzone. Selected files are not actually uploaded)</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>