<div id="sidebar" class="hide">
    <div id="logo">
        <a href="index.php">
            <img class="svg logo" alt="Logo">
        </a>
    </div>
    <ul class="horizontal nav nav-tabs text-left" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Dashboard'){echo 'active';} ?>" href="index.php"><img width="25px" src="../../assets/images/icons/dashboard.svg" class="svg icon" alt="">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Courses'){echo 'active';} ?>" href="index.php"><img width="25px" src="../../assets/images/icons/courses.svg" class="svg icon" alt="">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Messages'){echo 'active';} ?>" href="messages.php"><img width="25px" src="../../assets/images/icons/messages.svg" class="svg icon" alt="">Messages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Performance'){echo 'active';} ?>" href="performance.php"><img width="25px" src="../../assets/images/icons/performance.svg" class="svg icon" alt="">Performance</a>
        </li>
    </ul>
    <div class="nav-item account">
        <a class="nav-link sub-menu-link d-flex no-gutters align-items-center" href="#">
            <div class="col-auto">
                <img class="user" alt="" src="../../assets/images/placeholders/dp.jpg">
            </div>
            <div class="col-auto d-block">
                <h5>Emeka Ejekam</h5>
                <p title=">ejekamemeka@gmail.com" class="">ejekamemeka@gmail.com</p>
            </div>
        </a>
    </div>
</div>
