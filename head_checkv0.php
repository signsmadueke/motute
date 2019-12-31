<?php if ($control_key == '1'){ ?>

<div class="col-auto d-flex hidden-md hidden-sm ml-auto pl-0 pr-0" style="">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link dark" href="#"><img class="svg icon" alt="" src="assets/images/icons/bell.svg" style="width: 32px;"></a>
		</li>
	</ul>
</div>

<div class="col-auto d-flex hidden-md hidden-sm ml-auto pl-0 pr-0" style="">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link dark" href="#"><img class="svg icon" alt="" src="assets/images/icons/carts.svg" style="width: 32px;"></a>
		</li>
	</ul>
</div>

<div class="col-auto align-items-center d-flex hidden-md hidden-sm ml-auto pr-0 pl-0 show" style="">
<ul class="navbar-nav">

	<li class="nav-item account">
		<a class="nav-link padding sub-menu-link" href="#">
			<img class="user ml-0" alt="" src="assets/images/placeholders/dp.jpg">
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
</div>
<div class="col-auto ml-auto pr-0 hidden-lg navbar-nav">
<button class="collapsed hidden-lg navbar-toggler" type="button" data-toggle="collapse" data-target=".main-menu-collapse" aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
</div>
<?php } else { ?>

<div class="col-auto d-flex hidden-md hidden-sm ml-auto pl-0 pr-0" style="">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link dark" href="#"><img class="svg icon" alt="" src="assets/images/icons/carts.svg" style="width: 32px;"></a>
		</li>
	</ul>
</div>

<div class="col-auto align-items-center d-flex ml-auto pr-0 show" style="">
	<a class="btn btn-primary mr-10 h-100 hidden-sm" href="register.php">Register</a>
	<a class="btn btn-secondary mr-10 h-100 hidden-sm" href="login.php">Sign In</a>
	<button class="collapsed hidden-lg navbar-toggler" type="button" data-toggle="collapse" data-target=".main-menu-collapse" aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
</div>
<?php } ?>