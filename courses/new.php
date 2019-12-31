<?php
$title = 'Courses';
$activenav = 'Courses';
require_once '../inc/header.php';
?>

<nav id="nav" class="main navbar header">
    <div class="no-gutters row w-100 align-items-center">
        <div class="col-auto border-right">
            <a class="header-btn btn with-icon icon-left" href="messages.php"><img src="../../assets/images/icons/arrow-left.svg" class="svg icon" alt=""><h6 class="mb-0">Back</h6></a>
        </div>
        <div class="col-lg col-md-auto col-sm-auto mr-auto h-100">
            <div class="header-title">
                <h6 class="mb-0">Add a new course</h6>
                <p class="text-body mb-0">Edit details about your new course before you publish.</p>
            </div>
        </div>
        <div class="col-auto border-left">
            <a class="header-btn btn with-icon icon-right" href="messages.php"><h6 class="mb-0">Save</h6><img src="../../assets/images/icons/save.svg" class="svg icon" alt=""></a>
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</nav>
<div id="main">
    <div class="sidebar row">
        <div class="col-12">
            <ul id="progressbar">
                <li><a href="#" class="active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Information</a></li>
                <li><a href="#" class="active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Course Options</a></li>
                <li class="">Pricing</li>
            </ul>
        </div>
    </div>

    <div class="body row">
        <div class="col-12">
            <ul id="progressbar">
                <li><a href="#" class="active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Information</a></li>
                <li><a href="#" class="active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Course Options</a></li>
                <li class="">Pricing</li>
            </ul>
        </div>
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