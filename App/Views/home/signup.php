	<section class="main">

		<!-- BANNER -->

		<div class="banner-form">
			<div class="banner-img"></div>
		</div>

		
		<div class="form">

			<div class="title-form">
				<h2><?= $title ?></h2>
				<p>Hello Stranger!</p>
			</div>

			<!-- SIGN UP FORM -->

			<form name="form" method="post">

				<div class="form-group">
				   	<label for="username">Username</label>
				   	<input type="text" class="form-control" id="username" placeholder="Enter your username" required name="username">
				</div>

				<div class="form-group">
				   	<label for="email">Email address</label>
				   	<input type="email" class="form-control" id="email" placeholder="Enter email" required name="email">
				</div>

				<div class="row">
					  
					<div class="form-group col">
						<label for="Password">Password</label>
						<input type="password" class="form-control" id="Password" placeholder="Password" required name="password">
					</div>

					<div class="form-group col">
						<label for="password2">Repeat</label>
						<input type="password" class="form-control" id="password2" placeholder="Repeat Password" required name="password2">
					</div>
					  	
			  	</div>

				<button type="submit" class="btn btn-primary btn-submit">Submit</button>
					
				<div class="text-center">
					<div class="spinner-grow text-primary visually-hidden" role="status">
						 <span class="visually-hidden">Loading...</span>
					</div>
				</div>
				<div class="response"></div>
					
			</form>
		</div>
	</section>

