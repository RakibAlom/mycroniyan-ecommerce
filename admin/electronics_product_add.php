<?php include 'header.php'; ?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Electronics Product Add</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="" name="name" placeholder="name">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Category</label>
							<select class="form-control" name="category">
								<option>Device</option>
								<option>Parts</option>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>price</label>
							<input class="form-control" type="" name="price" placeholder="price">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Summary</label>
							<textarea class="form-control" name="summary"></textarea>
						</div>
					</div>
					<div class="col-md-4 container">
						<div class="form-group">
							<label>Image</label><br>
							<input class="alert alert-light" type="file" name="image" placeholder="">
						</div>
					</div>
				</div>

				<button class="btn btn-primary btn-block" name="submit">Upload New Electronics Product</button>
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
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		include '../include/dbcon.php';

		$upload_path = '../images/electronics/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$image);

		if ($upload_check == true) {
			$sql = "INSERT INTO electronics (image,name,category,price,summary) VALUES ('$image','$name','$category','$price','$summary')";

			$run = mysqli_query($con, $sql);

			if ($run == true) {
				?>
					<script>swal("Added","Electronis Product Add Successfully!","success");</script>
				<?php
			}else{
				?>
					<script>swal("Failed","Electronics Product Not Add!","error");</script>
				<?php
			}
		}else{
			?>
				<script>swal("Upload Failed","Image Upload Failed","error");</script>
			<?php
		}
	}




	include 'footer.php'; 
?>


