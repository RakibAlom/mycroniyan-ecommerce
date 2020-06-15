<?php include 'header.php'; ?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="jumbotron bg-white mt-5">
				<div class="row">
					<div class="col-md-6 left">
						<h3 class="font-weight-bold">Microniyan-এ সাইনআপ করুন</h3>
						<p>বাংলাদেশের সবচেয়ে বড় মার্কেট প্লেস </p>
						<div id="condition">
							<p><span id="box"><i class="fa fa-file-text-o"></i></span> আপনার নিজের এডগুলি পোস্ট করা শুরু করুন।</p>
							<p><span id="box"><i class="fa fa-search"></i></span> পরে দেখার জন্য এডকে ফেভারিট হিসেবে মার্ক করুন।</p>
							<p><span id="box"><i class="fa fa-cogs"></i></span> সুবিধাজনক সময়ে আপনার এডগুলো দেখুন এবং পরিচালনা করুন।</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="container">
							<h3 class="text-center font-weight-bold">Sign Form</h3>
							<hr>
							<form class="mt-2" method="post">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="" placeholder="name" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="" placeholder="enter email" required="">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password" name="" placeholder="enter password" required="">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input class="form-control" type="password" name="" placeholder="enter confirm password" required="">
								</div>
								<button class="btn btn-success btn-block">Sign up</button>
							</form>
							<hr>
							<div align="center" class="mt-5">
								<h5>আপনার কি একটি অ্যাকাউন্ট আছে?</h5>
								<button type="button" class="btn btn-warning"><a href="login.php" class="text-white">Login</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>