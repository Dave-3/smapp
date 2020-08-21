 <?php
use yii\helpers\Url;

?>
<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?= Url::to(['site/index'])?>"><img src="images/logo.png" alt=""></a>
					<a href="<?= Url::to(['site/index'])?>" class="dashboard-logo"><img src="images/logo2.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li>
							<a href="<?= Url::to(['site/index'])?>">Home</a>
						</li>

						<li>
							<a href="#">Buy</a>
						</li>

						<li>
							<a  href="#">Sell</a>
						</li>

						<li>
							<a href="#">Advertise</a>
						</li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="images/dashboard-avatar.jpg" alt=""></span>My Account</div>
						<ul>
							<li><a href="<?= Url::to(['dashboard/panel'])?>"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="<?= Url::to(['dashboard/message'])?>"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="<?= Url::to(['dashboard/booking'])?>"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="<?= Url::to(['site/index'])?>"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					<a href="<?= Url::to(['dashboard/add-listing'])?>" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

 