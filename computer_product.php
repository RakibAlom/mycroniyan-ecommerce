<?php 
	include 'header.php'; 
	include 'include/dbcon.php';

	$sql = "SELECT * FROM computer";
	$run = mysqli_query($con, $sql);
?>

<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
						<p class="list-group-item header" href="">Computer <i class="fa fa-angle-right"></i></p>
						<a class="list-group-item" href="">Apple</a>
						<a class="list-group-item" href="">Dell</a>
						<a class="list-group-item" href="">Asus</a>
						<a class="list-group-item" href="">HP</a>
						<a class="list-group-item" href="">Samsung</a>
						<a class="list-group-item" href="">Lenovo</a>
						<a class="list-group-item" href="">RAM</a>
						<a class="list-group-item" href="">Hard Disk</a>
						<a class="list-group-item" href="">DVD-R</a>
						<a class="list-group-item" href="">KeyBoard</a>
						<a class="list-group-item" href="">Mouse</a>
						<a class="list-group-item" href="">Microphone</a>
						<a class="list-group-item" href="">UPS</a>
				</div>
				<div class="col-md-9">
					<div class="row">
					<?php while($result = mysqli_fetch_assoc($run)) { ?>
						<div class="col-md-3 col-sm-6">
							<div class="card" id="card">
								<img src="images/computer/<?php echo  $result['image']; ?>" height="220px">
								<div class="card-body">
									<p class="text-center">
										<a style="text-decoration: none" href="computer_product_details.php?id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a>
										<br>
										<span class="text-danger">price: <?php echo $result['price']; ?> ৳</span>
									</p>
									<a href="computer_product_details.php?id=<?php echo $result['id']; ?>"><button class="btn btn-outline-info btn-sm">Details</button></a>
									<a href="order.php"><button class="btn btn-outline-success btn-sm float-right">Order</button></a>
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
						<li class="page-item"><a class="page-link" href="">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>