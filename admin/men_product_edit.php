<?php 
	include 'header.php'; 
	include '../include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM men WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>



	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Men Product Details Edit</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Product Name</label>
							<input class="form-control" type="" name="name" value="<?php echo $result['name']; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Item Code</label>
							<input class="form-control" type="" name="code" value="<?php echo $result['code']; ?>" >
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Product Type</label>
							<input class="form-control" type="" name="type" value="<?php echo $result['type']; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Fabric</label>
							<input class="form-control" type="" name="fabric" value="<?php echo $result['fabric']; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Sleeve</label>
							<input class="form-control" type="" name="sleeve" value="<?php echo $result['sleeve']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" type="" name="price"  value="<?php echo $result['price']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Fabrication</label>
							<input class="form-control" type="" name="fabrication" value="<?php echo $result['fabrication']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Color</label>
							<input class="form-control" type="" name="color" value="<?php echo $result['color']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Size</label>
							<input class="form-control" type="" name="size" value="<?php echo $result['size']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Others</label>
							<textarea class="form-control" name="others"></textarea>
						</div>
					</div>
				</div>

				<button class="btn btn-primary btn-block" name="submit">Upload New Men Product</button>
			</form>
		</div>
	</div>
</div>



<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$code = $_POST['code'];
		$type = $_POST['type'];
		$fabric = $_POST['fabric'];
		$sleeve = $_POST['sleeve'];
		$price = $_POST['price'];
		$fabrication = $_POST['fabrication'];
		$color = $_POST['color'];
		$size = $_POST['size'];
		$others = $_POST['others'];

		$sql = "UPDATE men SET name = '$name', code = '$code', type = '$type', fabric = '$fabric', sleeve = '$sleeve', price = '$price', fabrication = '$fabrication', color = '$color', size = '$size', note = '$others' WHERE id = '$id'";

		$run = mysqli_query($con, $sql);
		if ($run == true) {
			?>
				<script>swal("Updated","Update Success","success");</script>
			<?php
		}else{
			?>
				<script>swal("Failed","Update Failed","error");</script>
			<?php
		}
	}



	include 'footer.php'; 
?>


