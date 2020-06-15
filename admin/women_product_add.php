<?php include 'header.php'; ?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Women Product Add</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Product Name</label>
							<input class="form-control" type="" name="name" placeholder="name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Item Code</label>
							<input class="form-control" type="" name="code" placeholder="code">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Product Type</label>
							<input class="form-control" type="" name="type" placeholder="Type">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Main Materia</label>
							<input class="form-control" type="" name="materia" placeholder="materia">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Body</label>
							<input class="form-control" type="" name="body" placeholder="Body">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Sleeve</label>
							<input class="form-control" type="" name="sleeve" placeholder="sleeve">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Inner/Salwar</label>
							<input class="form-control" type="" name="inner_salwar" placeholder="inner/salwar">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Orna</label>
							<input class="form-control" type="" name="orna" placeholder="orna">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Work</label>
							<input class="form-control" type="" name="work" placeholder="work">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Body Size</label>
							<input class="form-control" type="" name="body_size" placeholder="size">
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="form-group">
							<label>Stitching</label>
							<input class="form-control" type="" name="stitching" placeholder="Stitching">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Color</label>
							<input class="form-control" type="" name="color" placeholder="color">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label><br>
							<input class="form-control" type="" name="price" placeholder="price">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Others</label>
							<textarea class="form-control" name="others"></textarea>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Images</label><br>
							<input class="alert alert-light container" type="file" name="image" placeholder="">
						</div>
					</div>
				</div>

				<button class="btn btn-primary btn-block" name="submit">Upload New Women Product</button>
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
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		include '../include/dbcon.php';

		$upload_path = '../images/women/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$image);

		if ($upload_check == true) {
			/*$sql = "INSERT INTO women (image,price,name,code,type,materia,body,sleeve,inner_salwar,orna,work,size,stitching,color,note) VALUES ('$image','$price','$name','$code','$type','$materia','$body','$sleeve','$inner_salwar','$orna','$work','$size','$stitching','$color','$others')"; */

			$sql = "INSERT INTO `women`(`image`, `price`, `name`, `code`, `type`, `materia`, `body`, `sleeve`, `inner_salwar`, `orna`, `work`, `body_size`, `stitching`, `color`, `note`) VALUES ('$image','$price','$name','$code','$type','$materia','$body','$sleeve','$inner_salwar','$orna','$work','$body_size','$stitching','$color','$others')";

			$run = mysqli_query($con,$sql);
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


