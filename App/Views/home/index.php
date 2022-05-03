	<!-- MENU -->

	<div class="menu">
		<ul>
			<li><a class="link-menu active" href="#home"><i class="bi bi-house-door"></i> Home</a></li>
			<li><a class="link-menu" href="#services"><i class="bi bi-star"></i> Services</a></li>
			<li><a class="link-menu" href="#statistics"><i class="bi bi-clipboard-data"></i> Statistics</a></li>
		</ul>
	</div>

	<!-- MAIN -->
	
	<section class="main">

		<!-- BANNER -->

		<div class="banner">
			<div class="banner-img"></div>
			<div class="banner-text">
				<h2>Share your texts with</h2>
				<h1>My Paste</h1>
				<a href="<?= $baseUrl ?>home/signin/">Sign In <i class="bi bi-box-arrow-in-right"></i></a>
				<a href="<?= $baseUrl ?>home/signup/">Sign Up <i class="bi bi-clipboard-check"></i></a>
			</div>
		</div>

		<!-- SERVICES -->
		
		<section class="container services" id="services">

			<div class="title">
				<h1>Our services</h1>
				<p>Take a look at some of the services we offer</p>
			</div>

			<div class="items row justify-content-between align-items-center">
				<div class="item-content col-3">
					<i class="bi bi-code-square"></i>
					<h3>Unlimited Texts</h3>
					<p>You can create texts and share them with your friends and all the people you want.</p>
				</div>
				<div class="item-content col-3">
					<i class="bi bi-shield-check"></i>
					<h3>Security</h3>
					<p>You can protect your texts with passwords and/or captchas like Recaptcha to avoid bots.</p>
				</div>
				<div class="item-content col-3">
					<i class="bi bi-bar-chart"></i>
					<h3>Statistics</h3>
					<p>Our website offers real time statistics of all the views you have received, unique or not.</p>
				</div>
			</div>
		</section>

		<!-- STATS -->

		<section class="container statistics" id="statistics">
			
			<div class="title">
				<h1>Statistics</h1>
				<p>Take a look at our statistics</p>
			</div>

			<div class="items row justify-content-between align-items-center">
				<div class="item-content col-3">
					<i class="bi bi-people"></i>
					<h3>100</h3>
					<h6>Registered users</h6>
				</div>
				<div class="item-content col-3">
					<i class="bi bi-card-text"></i>
					<h3>10232</h3>
					<h6>Created texts</h6>
				</div>
				<div class="item-content col-3">
					<i class="bi bi-eye"></i>
					<h3>23813</h3>
					<h6>Visualizations</h6>
				</div>
			</div>

		</section>

	</section>

