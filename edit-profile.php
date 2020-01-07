<?php
include 'api/v0/php/run_cookie_hot.php';
$title = 'Profile';
require_once 'inc/header.php';
?>


    <section id="settings" class="container pb-50">
        <div class="text-center w-100 pt-50 pb-50">
            <ul class="nav tabs">
                <li class="tab tab-secondary">
                    <a class="active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><span>Profile</span></a>
                </li>
                <li class="tab tab-secondary">
                    <a class=""  data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false"><span>Account</span></a>
                </li>
                
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="">
                    <section id="tab-title" class="pb-50">
                        <div class="row align-items-center">
                            <div class="col-sm align-items-center">
                                <h1 class="mb-0 text-heading">Profile Settings</h1>
                                <p class="text-body-lg">Update your information we have about you.</p>
                            </div>
                            <div class="col-lg-auto col-md-auto col-sm-12 text-right">
                                <input type="submit" class="btn btn-block btn-primary h-100 mr-10 mt-md-0 mt-sm-20" value="Save Changes">
                            </div>
                        </div>
                        <div class="bg-wrap">
                            <div class="bg"></div>
                        </div>
                    </section>

                    <section id="tab-title" class="pb-50"> 
                        <div class="row align-items-center mb-30">
                            <div class="col-12">
                                <label for="change-dp" class="change-dp">
                                    <div class="picture" style="background-image: url(assets/images/placeholders/dp.jpg);">
                                        <div class="overlay align-items-center text-center row no-gutters">
                                            <div class="border"></div>
                                            <div class="col-12">
                                                <img class="svg icon" alt="" src="assets/images/icons/plus.svg">
                                                <p>Upload Profile Photo</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <input id="change-dp" type="file" onchange="readURL(this);"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md form-group mb-30 pr-md-15 pr-sm-30">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" placeholder="eg: John" value="Emeka" name="fname" id="fname" required="">
                            </div>
                            <div class="col-md form-group mb-30 pl-md-15 pl-sm-30">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" placeholder="eg: Doe" value="Ejekam" name="lname" id="lname" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md form-group mb-30">
                                <label for="fname">Headline</label>
                                <input type="text" class="form-control" placeholder='Add a professional headline like, "Software Developer at Microsoft" or "Software Developer"' value="Software Developer at Microsoft" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md form-group">
                                <label for="fname">Short Description</label>
                                <textarea rows="5" class="form-control" placeholder='A short description about yourself.' style="resize: none;"></textarea>
                            </div>
                        </div>

                        <div class="line mt-50 mb-50"></div>

                        <div class="row">
                            <div class="col-md form-group mb-30">
                                <label for="fname">Website</label>
                                <input type="text" class="form-control" placeholder='Add your Website Link (e.g. domain.com).' value="www.microsoft.com" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md form-group mb-30">
                                <label for="fname">Facebook Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">http://www.facebook.com/</span></div>
                                    <input type="text" class="form-control" placeholder="Add your Facebook username (e.g. johndoe)." value="johndoe" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md form-group mb-30">
                                <label for="fname">Twitter Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">http://www.twitter.com/</span></div>
                                    <input type="text" class="form-control" placeholder="Add your Twitter username (e.g. johndoe)." value="johndoe" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md form-group mb-30">
                                <label for="fname">Youtube Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">http://www.youtube.com/</span></div>
                                    <input type="text" class="form-control" placeholder="Add your Youtube username (e.g. johndoe)." value="johndoe" aria-describedby="basic-addon1">
                                </div>
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
                                <div class="col-md form-group mt-30 pr-md-15 pr-sm-30">
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
                                <div class="col-md form-group mt-30 pr-md-15 pr-sm-30">
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

    
<?php require_once 'inc/footer.php'; ?>