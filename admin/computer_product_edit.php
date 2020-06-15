<?php 
	include 'header.php'; 
	include '../include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM computer WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>

	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Product Details Edit</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Computer Type</label>
							<select class="form-control" name="computer_type" value="<?php echo $result['type']; ?>">
								<option>Desktop</option>
								<option>Laptop</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Name</label>
							<input class="form-control" type="" name="name" value="<?php echo $result['name']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Brand</label>
							<input class="form-control" type="" name="brand" value="<?php echo $result['brand']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Processor Type</label>
							<input class="form-control" type="" name="processor_type" value="<?php echo $result['type']; ?>">
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Prcessor Speed</label>
							<input class="form-control" type="" name="speed" value="<?php echo $result['processor_speed']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>MotherBoard</label>
							<input class="form-control" type="" name="motherboard" value="<?php echo $result['motherboard']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Monitor</label>
							<input class="form-control" type="" name="monitor" value="<?php echo $result['monitor']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Hard Disk</label>
							<input class="form-control" type="" name="hard_disk" value="<?php echo $result['hard_disk']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<label>RAM</label>
							<input class="form-control" type="" name="ram" value="<?php echo $result['ram']; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Disk Type</label>
							<input class="form-control" type="" name="disk_type" value="<?php echo $result['disk_type']; ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Graphics Card</label>
							<input class="form-control" type="" name="graphics_card" value="<?php echo $result['graphics_card']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Audio/Speaker</label>
							<input class="form-control" type="" name="audio" value="<?php echo $result['audio']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Networking</label>
							<input class="form-control" type="" name="networking" value="<?php echo $result['networking']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Keyboard</label>
							<input class="form-control" type="" name="keyboard" value="<?php echo $result['keyboard']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Mouse</label>
							<input class="form-control" type="" name="mouse" value="<?php echo $result['mouse']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Modem</label>
							<input class="form-control" type="" name="modem" value="<?php echo $result['modem']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Casing</label>
							<input class="form-control" type="" name="casing" value="<?php echo $result['casing']; ?>">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<label>Others</label>
							<input class="form-control" name="others" value="<?php echo $result['others']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input type="" class="form-control" name="price" value="<?php echo $result['price']; ?>">
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

		$sql = "UPDATE computer SET type = '$computer_type', name = '$name', brand = '$brand', processor = '$processor_type', processor_speed = '$speed', motherboard = '$motherboard', monitor = '$monitor', ram = '$ram', hard_disk = '$hard_disk', disk_type = '$disk_type', graphics_card = '$graphics_card', audio = '$audio', networking = '$networking', keyboard = '$keyboard', mouse = '$mouse', modem = '$modem', casing = '$casing', others = '$others', price = '$price' WHERE id = '$id'";

		$run = mysqli_query($con,$sql);

			if ($run == true) {
			?>
				<script>swal("Updated","Product Update Success!","success");</script>
			<?php
			}else{
			?>
				<script>swal("Failed","Update Failed","error");</script>
			<?php
		}
	}





	include 'footer.php'; 

?>