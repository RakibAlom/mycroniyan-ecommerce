<?php 
	include 'header.php';
	include 'include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM men WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
					<p class="list-group-item header" href="">Men <i class="fa fa-angle-right"></i></p>
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
				<div class="col-md-9" id="details-content">
					<h3 id="sub-title">Product Details</h3>
					<table class="table">
						<tr>
							<td colspan="2" align="center">
								<img src="images/men/<?php echo $result['image']; ?>">
								<h6 class="font-weight-bold mt-3"><?php echo $result['name']; ?></h6>
								<h4 class="text-danger mt-2">Price: <?php echo $result['price']; ?> ৳</h4>
							</td>
						</tr>
						<tr>
							<th>Product Name</th>
							<td><?php echo $result['name']; ?></td>
						</tr>
						<tr>
							<th>Item code</th>
							<td><?php echo $result['code']; ?></td>
						</tr>
						<tr>
							<th>Product type</th>
							<td><?php echo $result['type']; ?></td>
						</tr>
						<tr>
							<th>Fabric</th>
							<td><?php echo $result['fabric']; ?></td>
						</tr>
						<tr>
							<th>Sleeve</th>
							<td><?php echo $result['sleeve']; ?></td>
						</tr>
						<tr>
							<th>Fabrication</th>
							<td><?php echo $result['fabrication']; ?></td>
						</tr>
						<tr>
							<th>Color</th>
							<td><?php echo $result['color']; ?></td>
						</tr>
						<tr>
							<th>Size</th>
							<td><?php echo $result['size']; ?></td>
						</tr>
					</table>
					<p class="text-secondary">Note: <?php echo $result['note']; ?></p>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>