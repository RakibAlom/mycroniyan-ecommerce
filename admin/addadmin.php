<?php include 'header.php'; ?>

	<!-- Database -->
	<div class="col-md-9">
		<div class="container">
			<h4 id="sub-title">New Admin Form</h4>
			<div class="row mt-4">
				<div class="col-md-6">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="text" name="name">
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input class="form-control" type="text" name="phone">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="address"></textarea>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" type="email" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" name="pass">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" name="confirm_pass">
						</div>
						<div class="form-group">
							<label>Image</label>
							<input class="alert alert-secondary" type="file" name="image">
						</div>
						<button class="btn btn-success btn-block" name="submit">Make Admin</button>
					</form>
				</div>
			</div>
		</div>
	</div>


<?php
	
	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$confirm_pass = $_POST['confirm_pass'];
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		include '../include/dbcon.php';

		if ($pass == $confirm_pass) {

			$upload_path = '../images/admin/';
			$upload_check = move_uploaded_file($tmp, $upload_path.$image);

			if ($upload_check == true) {
				
				$sql = "INSERT INTO admin(name,phone,address,email,password,image) VALUES ('$name','$phone','$address','$email','$confirm_pass','$image')";
				$run = mysqli_query($con,$sql);

				if ($run == true) {
					?>
						<script>swal("Added","Admin Add Successfully!","success");</script>
					<?php
				}else{
					?>
						<script>swal("Failed","Admin Not Add!","error");</script>
					<?php
				}

			}else{
				?>
					<script>swal("Upload Failed","Image Upload Failed","error");</script>
				<?php
			}


		}else{
			?>
				<script>swal("confirm password incorrect","Failed!","error");</script>
			<?php
		}


	}

	include 'footer.php';

?>


