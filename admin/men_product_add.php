<?php include 'header.php'; ?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Men Product Add</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Product Name</label>
							<input class="form-control" type="" name="name" placeholder="name">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Item Code</label>
							<input class="form-control" type="" name="code" placeholder="code">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Product Type</label>
							<input class="form-control" type="" name="type" placeholder="Type">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Fabric</label>
							<input class="form-control" type="" name="fabric" placeholder="fabric">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Sleeve</label>
							<input class="form-control" type="" name="sleeve" placeholder="sleeve">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" type="" name="price" placeholder="price">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Fabrication</label>
							<input class="form-control" type="" name="fabrication" placeholder="Fabrication">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Color</label>
							<input class="form-control" type="" name="color" placeholder="color">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Size</label>
							<input class="form-control" type="" name="size" placeholder="size">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Others</label>
							<textarea class="form-control" name="others"></textarea>
						</div>
					</div>
					<div class="col-md-4 container">
						<div class="form-group">
							<label>Images</label><br>
							<input class="alert alert-light" type="file" name="image" placeholder="">
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
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		include '../include/dbcon.php';

		$upload_path = '../images/men/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$image);
		if ($upload_check == true) {
			$sql = "INSERT INTO men (image,price,name,code,type,fabric,sleeve,fabrication,color,size,note) VALUES ('$image','$price','$name','$code','$type','$fabric','$sleeve','$fabrication','$color','$size','$others')";

			$run = mysqli_query($con, $sql);
			if ($run == true) {
				?>
					<script>swal("Added","Product Added Success","success");</script>
				<?php
			}else{
				?>
					<script>swal("Failed","Product Add Failed","error");</script>
				<?php
			}
		}else{
			?>
				<script>swal("Failed","Image Upload Failed","error");</script>
			<?php
		}
	}


	include 'footer.php'; 
?>


