<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Microiniyan | Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<!-- Header Section -->
	<div class="navbar-expand-sm" id="header">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"><i class="fa fa-bars"></i></button>
		<div class="row">
			<div id="sub-header" class="navbar ml-auto">
				<div id="social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-youtube"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
				</div>
				<div id="sub-text">
					<i class="fa fa-phone-square"> +880 1623405027</i> &nbsp &nbsp
					<a href="login.php">sign in</a> &nbsp &nbsp
					<a href="singup.php">sign up</a> &nbsp &nbsp
				</div>
			</div>
		</div>
		<div id="main-header">
			<div class="row"> 
				<div class="col-md-3">
					<h1 class="text-center font-weight-bold">Microniyan</h1>
				</div>
				<div class="col-md-6">
					<div class="input-group mb-3">
						<input class="form-control" type="search" name="" placeholder="search here">
						<div class="input-group-append">
							<button class="btn btn-primary"><i class="fa fa-search text-white"></i></button>
						</div>					
					</div>
				</div>
				<div class="col-md-3 cart">
					<i class="fa fa-shopping-cart"> Cart(0)</i>
				</div>
			</div>
		</div>

		<!-- Navbar -->
		<nav id="navbar">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="collapse navbar-collapse" id="navbarMenu">
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link active" href="../index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="../men_product.php">Men</a></li>
							<li class="nav-item"><a class="nav-link" href="../women_product.php">Women</a></li>
							<div class="dropdown">
								<li class="nav-item"><a class="nav-link" href="mobile.php">Mobile <i class="fa fa-angle-down"></i></a>
									<div class="dropdown-content">
										<a href="">Smartphone</a>
										<a href="">Tablet</a>
										<a href="">Mobile Parts</a>
									</div>
								</li>
							</div>
							<div class="dropdown">	
								<li class="nav-item"><a class="nav-link" href="#">Computer <i class="fa fa-angle-down"></i></a>
									<div class="dropdown-content">
										<a href="">Desktop</a>
										<a href="">Laptop</a>
										<a href="">Computer Parts</a>
									</div>
								</li>
							</div>	
							<li class="nav-item"><a class="nav-link" href="#">Book</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Template</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="../login.php">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="../signup.php">Signup</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>

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
							<h3 class="text-center">Admin Login</h3>
							<hr>
							<form action="" class="mt-2" method="post">
								<div class="form-group">
									<label>Email or Phone Number</label>
									<input class="form-control" type="text" name="email" placeholder="enter email or phone number">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password" placeholder="enter password" name="password">
								</div>
								<button class="btn btn-success btn-block" name="sign_in">Sign in</button>
							</form>
								
							<br>
							<a href="" style="float: right;">forget your Password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
	if (isset($_POST['sign_in'])) {
		$email = $_POST['email'];
		$pass = $_POST['password'];

		include '../include/dbcon.php';

		$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
		$run = mysqli_query($con,$sql);
		$check = mysqli_num_rows($run);
		if ($check == 0) {
			?>
				<script>alert('email or password incorrect!');</script>
			<?php
		}else{
			$result = mysqli_fetch_assoc($run);
			$email = $result['email'];
			$name = $result['name'];
			$image = $result['image'];
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $name;
			$_SESSION['image'] = $image;
			?>
				<script>window.open('dashboard.php','_self');</script>
			<?php
		}
	}

?>

<!-- Subscribe Box -->
<div class="jumbotron" id="sub-box">
	<div class="row">
		<div class="col-md-5 offset-1">
			<h2>Cool Shopping Shop</h2>
			<p>You are shopping smoothly and cool in this eCommerce web. And you also order any product and we will deliver to your address.</p>
		</div>
		<div class="col-md-6">
			<div id="input-box" class="input-group">
				<input class="form-control" type="text"  name="" placeholder="enter email">
				<button class="btn btn-info">Subscribe</button>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->

<div id="footer">
	<div class="row">
		<div class="col-md-4">
			<h5>Contact Information</h5>
			<ul>
				<li><i class="fa fa-location-arrow"></i>&nbsp &nbsp 127/Block-A, Sobujsena, Ghasitul, Sylhet, Bangladesh</li>
				<li><i class="fa fa-phone">&nbsp &nbsp <a href="">+88 01623 405027</a></i></li>
				<li><i class="fa fa-mail-forward"></i>&nbsp &nbsp<a href="">rakibalom17@gmail.com</a></li>
				<li><i class="fa fa-twitter"></i>&nbsp &nbsp Monday — Friday 8:00am - 5:00pm</li>
			</ul>
		</div>
		<div class="col-md-2">
			<h5>About Us</h5>
			<ul>
				<li><a href="">Team</a></li>
				<li><a href="">Brand Guidlines</a></li>
				<li><a href="">Jobs</a></li>
				<li><a href="">Advertise with us</a></li>
				<li><a href="">Payment Method</a></li>
				<li><a href="">Contact us</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h5>Help & Support</h5>
			<ul>
				<li><a href="">Discussions</a></li>
				<li><a href="">Troubleshooting</a></li>
				<li><a href="">Press</a></li>
				<li><a href="">Donation</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Suppot</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<h5>Privacy & Terms</h5>
			<ul>
				<li><a href="">Community Guidelines</a></li>
				<li><a href="">Terms</a></li>
				<li><a href="">Brand Guidelines</a></li>
				<li><a href="">Terms</a></li>
				<li><a href="">Privacy</a></li>
			</ul>
		</div>
	</div>

	<div id="sub-footer">
		<div class="row">
			<div class="col-md-7">
				<p>Copyright&copy 2019 All rights reserved | This template is made with by <span class="text-danger">Microniyan</span></p>
			</div>
			<div class="col-md-5">
				<img class="float-right" src="images/1.png">
			</div>
		</div>
	</div>
</div>

<!-- Footer End -->

<!-- Javascript -->
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/popper.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>


