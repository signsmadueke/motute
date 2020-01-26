<div id="sidebar" class="hide">
    <div id="header">
        <a href="index.php" id="logo" class="">
            <img class="svg logo" alt="Logo" src="../assets/images/logo.svg">
        </a>
    </div>
    <ul class="horizontal nav nav-tabs text-left" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Dashboard'){echo 'active';} ?>" href="index.php"><img width="25px" src="../../assets/images/icons/dashboard.svg" class="svg icon" alt=""><p>Dashboard</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Courses'){echo 'active';} ?>" href="index.php"><img width="25px" src="../../assets/images/icons/courses.svg" class="svg icon" alt=""><p>Courses</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Messages'){echo 'active';} ?>" href="messages.php"><img width="25px" src="../../assets/images/icons/messages.svg" class="svg icon" alt=""><p>Messages</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activenav == 'Performance'){echo 'active';} ?>" href="performance.php"><img width="25px" src="../../assets/images/icons/performance.svg" class="svg icon" alt=""><p>Performance</p></a>
        </li>
    </ul>
</div>
<div class="sidebar-overlay"></div>
