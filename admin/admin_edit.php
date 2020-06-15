<?php 
	include 'header.php';
	$id = $_GET['id'];
	include '../include/dbcon.php';

	$sql = "SELECT * FROM admin WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
?>

	<!-- Database -->
	<div class="col-md-9" >
		<div class="container" id="edit-admin">
			<?php while($result = mysqli_fetch_assoc($run)){ ?>
			<h4 id="sub-title">Edit <?php echo $result['name']; ?> Info</h4>
			<div id="change-pass" class="mt-4">
				<h5>Change Image</h5>
				<hr>
				<form accept="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label class="font-weight-bold">New Image</label>
						<input class="alert alert-secondary" type="file" name="image">
					</div>
					<button class="btn btn-primary" name="upload">Upload Image</button>
				</form>
			</div>
			<hr>
			<div class="row mt-4">
				<div class="col-md-6" id="admin-data">
					<h5>Change Data</h5>
					<hr>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?php echo $result['name']; ?>">
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input class="form-control" type="text" name="phone" value="<?php echo $result['phone']; ?>">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="address"><?php echo $result['address']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" type="email" name="email" value="<?php echo $result['email']; ?>">
						</div>
						
						<button class="btn btn-success btn-block" name="submit">Update Admin</button>
					</form>
				</div>
				<div class="col-md-6">
					<h5>Change Password</h5>
					<hr>
					<form action="" method="post">
						<div class="form-group">
							<label>Old Password</label>
							<input type="" class="form-control" name="old_pass">
						</div>
						<div class="form-group">
							<label>New Password</label>
							<input type="" class="form-control" name="new_pass">
						</div>
						<div class="form-group">
							<label>Confirm New Password</label>
							<input type="" class="form-control" name="confirm_pass">
						</div>
						<button class="btn btn-primary btn-block" name="pass">Change Password</button>
					</form>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

<?php
	if (isset($_POST['upload'])) {
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		$upload_path = '../images/admin/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$image);
		if ($upload_check == true) {
			$sql = "UPDATE admin SET image = '$image' WHERE id = '$id'";
			$run  = mysqli_query($con,$sql);
			if ($run == true) {
			?>	
				<script>swal("Uploaded","Image Upload Success!","success");</script>
			<?php
			}else{
				?>
					<script>swal("Failed","Image Upload Failed","error");</script>
				<?php
			}
		}else{
			?>
				<script>swal("Upload Failed","Image Upload Failed","error");</script>
			<?php
		}
	}
	
	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$email = $_POST['email'];

		$sql = "UPDATE admin SET name = '$name', phone = '$phone', address = '$address', email = '$email' WHERE id = '$id'";
		$run = mysqli_query($con,$sql);

		if ($run == true) {
			?>
				<script>
					swal("Updated","update successfully!","success");
				</script>
			<?php
		}else{
			?>
				<script>
					swal("Failed","update Faild!","error");
				</script>
			<?php
		}
	}

	if (isset($_POST['pass'])) {
		$old_pass = $_POST['old_pass'];

		$sql = "SELECT * FROM admin WHERE id = '$id'";
		$run = mysqli_query($con,$sql);
		$result = mysqli_fetch_assoc($run);

		$pass = $result['password'];
		
		if ($pass == $old_pass) {
			$new_pass = $_POST['new_pass'];
			$confirm_pass = $_POST['confirm_pass'];
			if ($new_pass == $confirm_pass) {
				$sql = "UPDATE admin SET password = '$confirm_pass' WHERE id = '$id'";
				$run = mysqli_query($con,$sql);
				if ($run == true) {
					?>
						<script>swal("Changed Password","Password Change Successfully!","success");</script>
					<?php
				}else{
					?>
						<script>
							swal("Failed Change","Password Change Failed!","error");
							window.open('editadmin.php','_self');
						</script>
					<?php
				}
			}
		}
	}

	include 'footer.php';

?>


