<?php if ($control_key == '1'){ ?>

<ul class="navbar-nav notifications">
	<li class="nav-item">
		<a class="nav-link sub-menu-link" href="#">
			<img class="svg icon" alt="" src="assets/images/icons/bell.svg" style="height: 25px;">
			<div class="pending"></div>
		</a>
		<div class="sub-menu">
            <h3>Notifications</h3>
            <div class="cart-head">
                <p>Notification Name & Details</p>
                <p>Price</p>
            </div>
        </div>
	</li>
</ul>
    
<ul class="navbar-nav cart">
    <li class="nav-item">
        <a class="nav-link sub-menu-link" href="cart.php">
        	<img class="svg icon" alt="" src="assets/images/icons/basket.svg" style="height: 25px;">
        	<div class="pending"></div>
        </a>
        <div class="sub-menu">
            <h3>Cart</h3>
            <div class="cart-head">
                <p>Course Name & Details</p>
                <p>Price</p>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
        </div>
    </li>
</ul>

<ul class="navbar-nav account">
	<li class="nav-item">
		<a class="nav-link sub-menu-link" href="#">
			<img class="user" alt="" src="assets/images/placeholders/dp.jpg">
		</a>
		<ul class="sub-menu">
			<li>
				<a class="align-items-center border-bottom d-flex mb-20 ml-10 mr-10 mt-0 nav-link no-gutters" style="padding: 25px;" href="#">
					<div class="col-auto">
						<img class="user" alt="" src="assets/images/placeholders/dp.jpg">
					</div>
					<div class="col-auto d-block">
						<h5>Hello, <?php echo($member_data['first_name']); ?></h5>
						<p><?php echo($member_data['email_address']); ?></p>
					</div>
				</a>
			</li>
			<li class="active">
				<a href="#" class="nav-link">
					<img class="svg icon" alt="" src="assets/images/icons/user.svg">
					Profile
				</a>
			</li>
			<li class="">
				<a href="#" class="nav-link">
					<img class="svg icon" alt="" src="assets/images/icons/message.svg">
					Messages
				</a>
			</li>
			<li class="">
				<a href="#" class="nav-link">
					<img class="svg icon" alt="" src="assets/images/icons/like.svg">
					Wishlist
				</a>
			</li>
			<li class="">
				<a href="#" class="nav-link">
					<img class="svg icon" alt="" src="assets/images/icons/settings.svg">
					Settings
				</a>
			</li>
			<li class="">
				<a href="logout.php" class="nav-link">
					<img class="svg icon" alt="" src="assets/images/icons/logout.svg">
					Logout
				</a>
			</li>
		</ul>
	</li>
</ul>
<?php } else { ?>    
<ul class="navbar-nav cart">
    <li class="nav-item">
        <a class="nav-link sub-menu-link" href="cart.php">
        	<img class="svg icon" alt="" src="assets/images/icons/basket.svg" style="height: 25px;">
        	<div class="pending"></div>
        </a>
        <div class="sub-menu">
            <h3>Cart</h3>
            <div class="cart-head">
                <p>Course Name & Details</p>
                <p>Price</p>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
            <div class="cart-item">
                <img class="cart-item-image" src="assets/images/courses/1.jpg" alt="">
                <div class="cart-item-details">
                    <p>Become a UX Designer Learn the Skills & Get...</p>
                    <div class="cart-item-tutor">
                        <img src="assets/images/placeholders/guy.png" alt="">
                        <p>Daniel Hughes</p>
                    </div>
                </div>
                <div class="cart-item-price">
                    $95.6
                </div>
            </div>
        </div>
    </li>
</ul>

<ul class="navbar-nav account">
    <li class="nav-item">
        <a class="nav-link sub-menu-link" href="cart.php"><img class="svg icon" alt="" src="assets/images/icons/user.svg" style="height: 25px;"></a>
        <div class="sub-menu">
            <h3>Account</h3>
            <p>Only users can buy courses.<br>Login or Create and account to use Motute.</p>
            <a class="btn btn-primary" href="register.php">Create Account</a>
			<a class="btn btn-secondary" href="login.php">Login</a>
        </div>
    </li>
</ul>
<?php } ?>