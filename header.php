<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Microiniyan Shop</title>
	<link rel="icon" href="images/logo.png" type="image/png"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
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
					<a href="login.html">sign in</a> &nbsp &nbsp
					<a href="singup.html">sign up</a> &nbsp &nbsp
				</div>
			</div>
		</div>
		<div id="main-header">
			<div class="row"> 
				<div class="col-md-3">
					<h1 class="text-center font-weight-bold">Microniyan </h1>
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
				<div class="col-md-10 offset-md-1">
					<div class="collapse navbar-collapse" id="navbarMenu">
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="men_product.php">Men</a></li>
							<li class="nav-item"><a class="nav-link" href="women_product.php">Women</a></li>
							<li class="nav-item"><a class="nav-link" href="mobile_product.php">Mobile</a></li>
							<div class="dropdown">	
								<li class="nav-item"><a class="nav-link" href="computer_product.php">Computer <i class="fa fa-angle-down"></i></a>
									<div class="dropdown-content">
										<a href="">Desktop</a>
										<a href="">Laptop</a>
									</div>
								</li>
							</div>
							<li class="nav-item"><a class="nav-link" href="book.php">Book</a></li>
							<li class="nav-item"><a class="nav-link" href="electronics_product.php">Electronics</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>