<?php 
	session_start();
	if (isset($_SESSION['email'])) {
	}else{
		header('location:index.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Microniyan | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script type="text/javascript" src="../js/sweetalert.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary">
	<a href="dashboard.php"><h4 class="text-white font-weight-bold">Dashboard</h4></a>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item"><a href=""><img class="rounded-circle" src="../images/admin/<?php echo $_SESSION['image']; ?>" style="height: 35px;width: 35px;"></a></li>
		
		<li class="nav-item"><a href="profile.php" class="text-white nav-link"><?php echo $_SESSION['name']; ?></a></li>
		&nbsp &nbsp
		<li class="nav-item"><a href="logout.php" class="text-white nav-link font-weight-bold">Logout</a></li>
	</ul>

</nav>

<!-- Main Content -->
<div class="row">
	<!-- Sidebar -->
	<div class="col-md-3" style="padding:0">
		<div class="container" id="admin-menu">
			<div class="list-group">
				<a href="" class="list-group-item disabled" style="border-radius: 0">Menu</a>
				<a href="mobile_product.php" class="list-group-item">Mobile Product</a>
				<a href="mobile_product_add.php" class="list-group-item">Add Mobile Product</a>
				<a href="men_product.php" class="list-group-item">Men Product</a>
				<a href="men_product_add.php" class="list-group-item">Add Men Product</a>
				<a href="women_product.php" class="list-group-item">Women Product</a>
				<a href="women_product_add.php" class="list-group-item">Add Women Product</a>
				<a href="computer_product.php" class="list-group-item">Computer Product</a>
				<a href="computer_product_add.php" class="list-group-item">Add Product Computer</a>
				<a href="book.php" class="list-group-item">Book</a>
				<a href="book_add.php" class="list-group-item">Add Book</a>
				<a href="electronics_product.php" class="list-group-item">Electronics Product</a>
				<a href="electronics_product_add.php" class="list-group-item">Add Electronics Product</a>
				<a href="adminlist.php" class="list-group-item">Admin List</a>
				<a href="addadmin.php" class="list-group-item">Add Admin</a>
				<a href="" class="list-group-item" style="border-radius: 0">User List</a>
				<a href="contact.php" class="list-group-item">Cantact</a>
				<a href="" class="list-group-item">About</a>
				
			</div>
		</div>
	</div>