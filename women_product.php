<?php 
	include 'header.php';
	include 'include/dbcon.php';

	$sql = "SELECT * FROM women";
	$run = mysqli_query($con,$sql);
?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
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
					<?php while($result = mysqli_fetch_assoc($run)) { ?>
						<div class="col-md-3 col-sm-6">
							<div class="card">
								<img src="images/women/<?php echo $result['image']; ?>" height="220px">
								<div class="card-body">
									<p class="text-center">
										<a style="text-decoration: none;" href="women_product_details.php?id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a>
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
					<ul class="pagination mt-4">
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

<?php include 'footer.php'; ?>