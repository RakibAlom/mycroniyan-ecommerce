<?php 
	include 'header.php'; 
	include '../include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM electronics WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Electronics Product Add</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="" name="name" value="<?php echo $result['name']; ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Category</label>
							<select class="form-control" name="category" value="<?php echo $result['category']; ?>">
								<option>Device</option>
								<option>Parts</option>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>price</label>
							<input class="form-control" type="" name="price" value="<?php echo $result['price']; ?>">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Summary</label>
							<input class="form-control" name="summary" value="<?php echo $result['summary']; ?>"></input>
						</div>
					</div>
				</div>

				<button class="btn btn-primary btn-block" name="submit">Update Product Details</button>
			</form>
		</div>
	</div>
</div>



<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$category = $_POST['category'];
		$price = $_POST['price'];
		$summary = $_POST['summary'];

		$sql = "UPDATE electronics SET name = '$name', category = '$category', price = '$price', summary = '$summary' WHERE id = '$id'";

		$run = mysqli_query($con, $sql);

			if ($run == true) {
				?>
					<script>swal("Updated","Details Update Successfully!","success");</script>
				<?php
			}else{
				?>
					<script>swal("Failed","Details Update Failed!","error");</script>
				<?php
			}
	}

	include 'footer.php'; 
?>