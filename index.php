<?php include 'include/dbcon.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Microiniyan Shop</title>
	<link rel="icon" href="images/logo.png" type="image/png"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
						<p class="list-group-item header" href="">Mobile <i class="fa fa-angle-right"></i></p>
						<a class="list-group-item" href="">Smartphone</a>
						<a class="list-group-item" href="">Earphone</a>
						<a class="list-group-item" href="">Iphone</a>
						<a class="list-group-item" href="">Feature Phone</a>
						<a class="list-group-item" href="">Samsung</a>
						<a class="list-group-item" href="">Oppo</a>
						<a class="list-group-item" href="">Walton</a>
						<a class="list-group-item" href="">Lava</a>
						<a class="list-group-item" href="">Xiaomi</a>
						<a class="list-group-item" href="">Maximus</a>
						<a class="list-group-item" href="">Blackberry</a>
						<a class="list-group-item" href="">Google</a>
						<a class="list-group-item" href="">Nokia</a>
				</div>
				<div class="col-md-9">
					<div class="row">
					<?php 
						$sql = "SELECT * FROM mobile";
						$run = mysqli_query($con,$sql);
					 ?>
					 <?php while($result = mysqli_fetch_assoc($run)) { ?>
						<div class="col-md-3 col-sm-6">
							<div class="card" id="card">
								<img src="images/mobile/<?php echo $result['image']; ?>" height="220px">
								<div class="card-body">
									<p class="text-center">
										<a style="text-decoration: none" href="mobile_details.php?id=<?php echo $result['id']; ?>"><?php echo $result['brand']; ?> <?php echo $result['model']; ?></a>
										<br>
										<span class="text-danger">price: <?php echo $result['price']; ?> ৳</span>
									</p>
									<a href="mobile_details.php?id=<?php echo $result['id']; ?>"><button class="btn btn-outline-info btn-sm">Details</button></a>
									<a href="order_product.php?id=<?php echo $result['id']; ?>"><button class="btn btn-outline-success btn-sm float-right">Order</button></a>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
					<br>
					<button class="btn btn-outline-secondary btn-lg">View More</button>
				</div>
			</div>
			<hr>

			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
						<p class="list-group-item header" href="">Men <i class="fa fa-angle-right"></i></p>
						<a class="list-group-item" href="">Shirts</a>
						<a class="list-group-item" href="">T-Shirt</a>
						<a class="list-group-item" href="">Pants</a>
						<a class="list-group-item" href="">Belts</a>
						<a class="list-group-item" href="">Fragrances</a>
						<a class="list-group-item" href="">Gents Watches</a>
						<a class="list-group-item" href="">Sunglass</a>
						<a class="list-group-item" href="">Formal Shoes</a>
						<a class="list-group-item" href="">Casual Shoes</a>
						<a class="list-group-item" href="">Sports Shoes</a>
						<a class="list-group-item" href="">Polo Shirts</a>
						<a class="list-group-item" href="">Bags</a>
						<a class="list-group-item" href="">Backpack</a>
				</div>
				<div class="col-md-9">
					<div class="row">
					<?php 
						$sql = "SELECT * FROM men";
						$run = mysqli_query($con,$sql);
					?>
					<?php while($result = mysqli_fetch_assoc($run)) { ?>
						<div class="col-md-3 col-sm-6">
							<div class="card">
								<img src="images/men/<?php echo $result['image']; ?>" height="220px">
								<div class="card-body">
									<p class="text-center">
										<a style="text-decoration: none" href="men_product_details.php?id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a>
										<br>
										<span class="text-danger">price: <?php echo $result['price']; ?> ৳</span>
									</p>
									<a href="men_product_details.php?id=<?php echo $result['id']; ?>"><button class="btn btn-outline-info btn-sm">Details</button></a>
									<a href="order_product.php?id=<?php echo $result['id']; ?>"><button class="btn btn-outline-success btn-sm float-right">Order</button></a>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
					<br>
					<button class="btn btn-outline-secondary btn-lg">View More</button>
				</div>
			</div>
			<hr>

			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
					<p class="list-group-item header" href="">Women <i class="fa fa-angle-right"></i></p>
					<a class="list-group-item" href="">Watches</a>
					<a class="list-group-item" href="">Jewelry</a>
					<a class="list-group-item" href="">Perfume</a>
					<a class="list-group-item" href="">Saree</a>
					<a class="list-group-item" href="">Makeup</a>
					<a class="list-group-item" href="">Salwar Kameez</a>
					<a class="list-group-item" href="">Fashion Accessories</a>
					<a class="list-group-item" href="">Kurti</a>
					<a class="list-group-item" href="">Tops</a>
					<a class="list-group-item" href="">Sports Shoes</a>
					<a class="list-group-item" href="">Eye Liner & Eyebrow Kits</a>
					<a class="list-group-item" href="">Sandals & Flip-Flops</a>
					<a class="list-group-item" href="">Gowns</a>
				</div>

				<div class="col-md-9">
					<div class="row">
					<?php 
						$sql = "SELECT * FROM women";
						$run = mysqli_query($con,$sql);
					 ?>
					 <?php while($result = mysqli_fetch_assoc($run)){ ?>
						<div class="col-md-3 col-sm-6">
							<div class="card">
								<img src="images/women/<?php echo $result['image']; ?>" height="220px">
								<div class="card-body">
									<p class="text-center">
										<a style="text-decoration: none" href="men_product_details.php?id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a>
										<br>
										<span class="text-danger">price: <?php echo $result['price']; ?> ৳</span>		
									</p>
									<a href="women_product_details.php?id=<?php echo $result['id']; ?>"><button class="btn btn-outline-info btn-sm">Details</button></a>
									<button type="button" data-toggle="modal" data-target="#order" class="btn btn-outline-success btn-sm float-right">Order</button>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
					<br>
					<button class="btn btn-outline-secondary btn-lg">View More</button>
					<br><br>
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="">Previous</a></li>
						<li class="page-item active"><a class="page-link" href="">1</a></li>
						<li class="page-item"><a class="page-link" href="">2</a></li>
						<li class="page-item"><a class="page-link" href="">3</a></li>
						<li class="page-item"><a class="page-link" href="">4</a></li>
						<li class="page-item"><a class="page-link" href="">5</a></li>
						<li class="page-item"><a class="page-link" href="">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- Order Modal -->
<div class="modal fade" id="order">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Order Info</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-md-8">
						<form>
							<div class="form-group">
								<label>Pices</label>
								<input type="Number" name="">
							</div>
							<p class="font-weight-bold">Address</p>
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" type="text" name="" placeholder="House No">
								</div>
								<div class="col-md-6">
									<input class="form-control" type="text" name="" placeholder="Road No/Name">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<input class="form-control" type="text" name="" placeholder="Area">
								</div>
								<div class="col-md-6">
									<input class="form-control" type="text" name="" placeholder="District">
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4">
						<img class="img-fluid img-thumbnail" src="images/0177236_samsung-galaxy-m20-3gb-32gb-ocean-blue_300.jpeg">
					</div>
				</div>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
				<a href=""><button class="btn btn-outline-success">Confirm</button></a>
			</div>
		</div>
	</div>
</div>

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
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


