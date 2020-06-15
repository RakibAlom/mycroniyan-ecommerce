<?php include 'header.php' ?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="jumbotron bg-white mt-5">
				<div class="row">
					<div class="col-md-6 left">
						<h3 class="font-weight-bold">Microniyan-এ লগইন করুন</h3>
						<p>বাংলাদেশের সবচেয়ে বড় মার্কেট প্লেস </p>
						<div id="condition">
							<p><span id="box"><i class="fa fa-file-text-o"></i></span> আপনার নিজের এডগুলি পোস্ট করা শুরু করুন।</p>
							<p><span id="box"><i class="fa fa-search"></i></span> পরে দেখার জন্য এডকে ফেভারিট হিসেবে মার্ক করুন।</p>
							<p><span id="box"><i class="fa fa-cogs"></i></span> সুবিধাজনক সময়ে আপনার এডগুলো দেখুন এবং পরিচালনা করুন।</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="container">
							<h3 class="text-center font-weight-bold">Login</h3>
							<hr>
							<form action="" class="mt-2" method="post">
								<div class="form-group">
									<label>Email or Phone Number</label>
									<input class="form-control" type="text" name="user_email" placeholder="enter email or phone number">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password" placeholder="enter password" name="user_password">
								</div>
								<button type="submit" class="btn btn-success btn-block" name="sign_in">Sign in</button>
							</form>
							<hr>
							<a href="" style="float: right">forget your password?</a>
							<div align="center" class="mt-5">
								<h5>create a new account</h5>
								<button type="button" class="btn btn-primary"><a href="signup.php" class="text-white">Sign up</a></button>
							</div>
							<hr>
							<a href="admin/index.php">admin?</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>