<?php
	include 'header.php';

	include '../include/dbcon.php';
	$count = 1;
	$sql = "SELECT * FROM mobile";
	$run = mysqli_query($con,$sql);
?>

	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<form action="" method="post">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="mobile_product_add.php">Add Porduct (Mobile)</a></button>
					</div>
					<div class="col-md-6 col-sm-6 ml-auto">
						<div class="input-group mb-3">
							<input type="search" class="form-control" name="search" placeholder="search here">
							<div class="input-group-append">
								<button class="btn btn-success" name="search"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
			</form>

			<div id="details" class="mt-2">
				<table class="table table-hover table-striped">
					<tr>
						<th>SL</th>
						<th>Brand</th>
						<th>Model</th>
						<th>Price</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)){ ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['brand']; ?></td>
						<td><?php echo $result['model']; ?></td>
						<td><?php echo $result['price']; ?></td>
						<td><img height="45px" width="45px" src="../images/mobile/<?php echo $result['image']; ?>"></td>
						<td>
							<a href="mobile_product_view.php?id=<?php echo $result['id']; ?>" class="btn btn-success">View</a>
							<a href="mobile_product_edit.php?id=<?php echo $result['id']; ?>" class="btn btn-info">Edit</a>
							<a href="mobile_product_delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include'footer.php'; ?>