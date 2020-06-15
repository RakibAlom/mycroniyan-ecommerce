<?php 
	include 'header.php';
	include 'include/dbcon.php';
	$sql = "SELECT * FROM men";
	$run = mysqli_query($con,$sql);
?>

<!-- Main Content -->
	<div id="main-content">
		<div class="container">
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
									<button type="button" data-toggle="modal" data-target="#order" class="btn btn-outline-success btn-sm float-right">Order</button>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
					<ul class="pagination mt-3">
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
						<img class="img-fluid img-thumbnail" src="images/0169263_mens-full-sleeve-casual-cotton-shirt-fc-s78_300.jpeg">
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

<?php include 'footer.php'; ?>