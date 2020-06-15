<?php 
	include 'header.php'; 
	include '../include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM women WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Women Product Details Edit</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Product Name</label>
							<input class="form-control" type="" name="name" value="<?php echo $result['name']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Item Code</label>
							<input class="form-control" type="" name="code" value="<?php echo $result['code']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Product Type</label>
							<input class="form-control" type="" name="type" value="<?php echo $result['type']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Main Materia</label>
							<input class="form-control" type="" name="materia" value="<?php echo $result['materia']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Body</label>
							<input class="form-control" type="" name="body" value="<?php echo $result['body']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Sleeve</label>
							<input class="form-control" type="" name="sleeve" value="<?php echo $result['sleeve']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Inner/Salwar</label>
							<input class="form-control" type="" name="inner_salwar" value="<?php echo $result['inner_salwar']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Orna</label>
							<input class="form-control" type="" name="orna" value="<?php echo $result['orna']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Work</label>
							<input class="form-control" type="" name="work" value="<?php echo $result['work']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Body Size</label>
							<input class="form-control" type="" name="body_size" value="<?php echo $result['body_size']; ?>">
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
							<label>Stitching</label>
							<input class="form-control" type="" name="stitching" value="<?php echo $result['stitching']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Color</label>
							<input class="form-control" type="" name="color" value="<?php echo $result['color']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label><br>
							<input class="form-control" type="" name="price" value="<?php echo $result['price']; ?>">
						</div>
					</div>
					<div class="col-md-9">
						<div class="form-group">
							<label>Others</label>
							<textarea class="form-control" name="others" value="<?php echo $result['note']; ?>"></textarea>
						</div>
					</div>
				</div>

				<button class="btn btn-primary btn-block" name="submit">Update Product</button>
			</form>
		</div>
	</div>
</div>



<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$code = $_POST['code'];
		$type = $_POST['type'];
		$materia = $_POST['materia'];
		$body = $_POST['body'];
		$sleeve = $_POST['sleeve'];
		$inner_salwar = $_POST['inner_salwar'];
		$orna = $_POST['orna'];
		$work = $_POST['work'];
		$body_size = $_POST['body_size'];
		$stitching = $_POST['stitching'];
		$color = $_POST['color'];
		$price = $_POST['price'];
		$others = $_POST['others'];

		$sql = "UPDATE women SET name = '$name', code = '$code', type = '$type', materia = '$materia', body = '$body', sleeve = '$sleeve', inner_salwar = '$inner_salwar', orna = '$orna', work = '$work', body_size = '$body_size', stitching = '$stitching', color = '$color', price = '$price', note = '$others' WHERE id = '$id'";

		$run = mysqli_query($con,$sql);

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


