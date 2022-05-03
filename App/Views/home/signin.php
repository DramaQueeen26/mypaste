	<section class="main">

		<!-- BANNER -->

		<div class="banner-form">
			<div class="banner-img"></div>
		</div>

		<div class="form">

			<div class="title-form">
				<h2>Sign In</h2>
				<p>Welcome back!</p>
			</div>

			<!-- SIGN IN FORM -->

			<form name="form" method="post">

				<div class="form-group">
			   		<label for="username-email">Username or email</label>
			   		<input type="username-email" class="form-control" id="username-email" placeholder="Enter your username or email" required name="username-email">
				</div>
					  
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" required name="password">
				</div>
					  
				<button type="submit" class="btn btn-primary btn-submit">Submit</button>

				<div class="text-center">
					<div class="spinner-grow text-primary visually-hidden" role="status">
						 <span class="visually-hidden">Loading...</span>
					</div>
				</div>
				<div class="response"></div>

				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<a href="<?= $baseUrl?>home/recover">Recover Password</a>
					<a href="<?= $baseUrl?>home/signup">Create a New account</a>
				</div>
					
			</form>
		</div>
	</section>

