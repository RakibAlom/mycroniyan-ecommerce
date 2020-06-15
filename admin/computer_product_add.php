<?php include 'header.php'; ?>

	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Computer Product Add</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Computer Type</label>
							<select class="form-control" name="computer_type">
								<option>Desktop</option>
								<option>Laptop</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="" name="name" placeholder="name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Brand</label>
							<input class="form-control" type="" name="brand" placeholder="brand">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Processor Type</label>
							<input class="form-control" type="" name="processor_type" placeholder="type">
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Prcessor Speed</label>
							<input class="form-control" type="" name="speed" placeholder="processor speed">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>MotherBoard</label>
							<input class="form-control" type="" name="motherboard" placeholder="motherboard">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Monitor</label>
							<input class="form-control" type="" name="monitor" placeholder="monitor">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Hard Disk</label>
							<input class="form-control" type="" name="hard_disk" placeholder="hard disk">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<label>RAM</label>
							<input class="form-control" type="" name="ram" placeholder="RAM">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Disk Type</label>
							<input class="form-control" type="" name="disk_type" placeholder="type">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Graphics Card</label>
							<input class="form-control" type="" name="graphics_card" placeholder="graphics card">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Audio/Speaker</label>
							<input class="form-control" type="" name="audio" placeholder="audio/speaker">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Networking</label>
							<input class="form-control" type="" name="networking" placeholder="network type">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Keyboard</label>
							<input class="form-control" type="" name="keyboard" placeholder="keyboard name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Mouse</label>
							<input class="form-control" type="" name="mouse" placeholder="mouse name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Modem</label>
							<input class="form-control" type="" name="modem" placeholder="modem type">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Casing</label>
							<input class="form-control" type="" name="casing" placeholder="casing type">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<label>Others</label>
							<textarea class="form-control" name="others"></textarea>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input type="" class="form-control" name="price" placeholder="price">
						</div>
					</div>
					<div class="col-md-4 container">
						<div class="form-group">
							<label>Images</label><br>
							<input class="alert alert-light" type="file" name="image" placeholder="">
						</div>
					</div>
				</div>
				<button class="btn btn-primary btn-block" name="submit">Upload New Computer Product</button>
			</form>
		</div>
	</div>
</div>



<?php
	if (isset($_POST['submit'])) {
		$computer_type = $_POST['computer_type'];
		$name = $_POST['name'];
		$brand = $_POST['brand'];
		$processor_type = $_POST['processor_type'];
		$speed = $_POST['speed'];
		$motherboard = $_POST['motherboard'];
		$monitor = $_POST['monitor'];
		$ram = $_POST['ram'];
		$hard_disk = $_POST['hard_disk'];
		$disk_type = $_POST['disk_type'];
		$graphics_card = $_POST['graphics_card'];
		$audio = $_POST['audio'];
		$networking = $_POST['networking'];
		$keyboard = $_POST['keyboard'];
		$mouse = $_POST['mouse'];
		$modem = $_POST['modem'];
		$casing = $_POST['casing'];
		$others = $_POST['others'];
		$price = $_POST['price'];
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		include '../include/dbcon.php';

		$upload_path = '../images/computer/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$image);
		if ($upload_check == true) {
			$sql = "INSERT INTO computer (image,name,price,type,brand,processor,processor_speed,motherboard,monitor,ram,hard_disk,disk_type,graphics_card,audio,networking,keyboard,mouse,modem,casing,others) VALUES ('$image','$name','$price','$computer_type','$brand','$processor_type','$speed','$motherboard','$monitor','$ram','$hard_disk','$disk_type','$graphics_card','$audio','$networking','$keyboard','$mouse','$modem','$casing','$others')";

			$run = mysqli_query($con,$sql);
			if ($run == true) {
				?>
					<script>swal("Added","Computer Add Successfully!","success");</script>
				<?php
				}else{
				?>
					<script>swal("Failed","Computer Not Add!","error");</script>
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