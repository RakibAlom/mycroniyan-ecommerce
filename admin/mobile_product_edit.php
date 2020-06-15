<?php 
	include 'header.php'; 
	include '../include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM mobile WHERE id = '$id'";
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
							<label>Brand</label>
							<input class="form-control" type="" name="brand" placeholder="brand name" required="" value="<?php echo $result['brand']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Model</label>
							<input class="form-control" type="" name="model" placeholder="model" required="" value="<?php echo $result['model']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" type="" name="price" placeholder="price" required="" value="<?php echo $result['price']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Release Date</label>
							<input class="form-control" type="" name="date" placeholder="release date" value="<?php echo $result['release_date']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Body Type</label>
							<input class="form-control" type="" name="body_type" placeholder="type" value="<?php echo $result['body_type']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Body Color</label>
							<input class="form-control" type="" name="body_color" placeholder="color" value="<?php echo $result['color']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Deminesion</label>
							<input class="form-control" type="" name="deminesion" placeholder="deminesion" value="<?php echo $result['deminesion']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Weight</label>
							<input class="form-control" type="" name="weight" placeholder="weight" value="<?php echo $result['weight']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>SIMs</label>
							<input class="form-control" type="" name="sim" placeholder="sim" value="<?php echo $result['sim']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Protection</label>
							<input class="form-control" type="" name="protection" placeholder="protection" value="<?php echo $result['protection']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Display Type</label>
							<input class="form-control" type="" name="display_type" placeholder="type" value="<?php echo $result['display_type']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Display Size</label>
							<input class="form-control" type="" name="display_size" placeholder="size" value="<?php echo $result['size']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>2G</label>
							<input class="form-control" type="" name="g2" placeholder="2g brand" value="<?php echo $result['2g']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>3G</label>
							<input class="form-control" type="" name="g3" placeholder="3g brand" value="<?php echo $result['3g']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>4G</label>
							<input class="form-control" type="" name="g4" placeholder="4g brand" value="<?php echo $result['4g']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Speed</label>
							<input class="form-control" type="" name="speed" placeholder="Net Speed" value="<?php echo $result['speed']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Main Camera</label>
							<input class="form-control" type="" name="main_camera" placeholder="main camera" value="<?php echo $result['main_camera']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Camera Features</label>
							<input class="form-control" type="" name="features" placeholder="features" value="<?php echo $result['feature']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Videos</label>
							<input class="form-control" type="" name="videos" placeholder="Videos Resulation" value="<?php echo $result['videos']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Selfie Camera</label>
							<input class="form-control" type="" name="selfie" placeholder="selfie" value="<?php echo $result['selfie_camera']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>CPU</label>
							<input class="form-control" type="" name="cpu" placeholder="cpu" value="<?php echo $result['cpu']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Chipset</label>
							<input class="form-control" type="" name="chipset" placeholder="chipset" value="<?php echo $result['chipset']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>GPU</label>
							<input class="form-control" type="" name="gpu" placeholder="gpu" value="<?php echo $result['gpu']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>OS/iOS</label>
							<input class="form-control" type="" name="os" placeholder="operating system" required="" value="<?php echo $result['os_ios']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>RAM</label>
							<input class="form-control" type="" name="ram" placeholder="RAM" required="" value="<?php echo $result['ram']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>ROM</label>
							<input class="form-control" type="" name="rom" placeholder="ROM" required="" value="<?php echo $result['rom']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>External</label>
							<input class="form-control" type="" name="external" placeholder="secondary" value="<?php echo $result['external']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Battery</label>
							<input class="form-control" type="" name="battery" placeholder="battery" value="<?php echo $result['battery']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Talk Time</label>
							<input class="form-control" type="" name="talktime" placeholder="talktime" value="<?php echo $result['talktime']; ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Sensiors</label>
							<input class="form-control" type="" name="sensiors" placeholder="Sensiors" value="<?php echo $result['sensiors']; ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Bluetooth</label>
							<input class="form-control" type="" name="bluetooth" placeholder="bluetooth" value="<?php echo $result['bluetooth']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>GPS</label>
							<input class="form-control" type="" name="gps" placeholder="gps" value="<?php echo $result['gps']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>WiFi</label>
							<input class="form-control" type="" name="wifi" placeholder="wifi" value="<?php echo $result['wifi']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>USB</label>
							<input class="form-control" type="" name="usb" placeholder="usb" value="<?php echo $result['usb']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Sound</label>
							<input class="form-control" type="" name="sound" placeholder="sound" value="<?php echo $result['sound']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Others</label>
							<textarea name="others" class="form-control" value="<?php echo $result['others']; ?>"></textarea>
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
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		$body_type = $_POST['body_type'];
		$body_color = $_POST['body_color'];
		$deminesion = $_POST['deminesion'];
		$weight = $_POST['weight'];
		$sim = $_POST['sim'];
		$protection = $_POST['protection'];
		$display_type = $_POST['display_type'];
		$display_size = $_POST['display_size'];
		$g2 = $_POST['g2'];
		$g3 = $_POST['g3'];
		$g4 = $_POST['g4'];
		$speed = $_POST['speed'];
		$main_camera = $_POST['main_camera'];
		$features = $_POST['features'];
		$videos = $_POST['videos'];
		$selfie = $_POST['selfie'];
		$cpu = $_POST['cpu'];
		$chipset = $_POST['chipset'];
		$gpu = $_POST['gpu'];
		$os = $_POST['os'];
		$ram = $_POST['ram'];
		$rom = $_POST['rom'];
		$external = $_POST['external'];
		$battery = $_POST['battery'];
		$talktime = $_POST['talktime'];
		$sensiors = $_POST['sensiors'];
		$bluetooth = $_POST['bluetooth'];
		$gps = $_POST['gps'];
		$wifi = $_POST['wifi'];
		$usb = $_POST['usb'];
		$sound = $_POST['sound'];
		$others = $_POST['others'];
		
		$sql = "UPDATE mobile SET brand = '$brand', model = '$model', price = '$price', release_date = '$date', body_type = '$body_type', color = '$body_color', deminesion = '$deminesion', weight = '$weight', sim = '$sim', protection = '$protection', display_type = '$display_type', size = '$display_size', 2g = '$g2', 3g = '$g3', 4g = '$g4', speed = '$speed', main_camera = '$main_camera', feature = '$features', videos = '$videos', selfie_camera = '$selfie', cpu = '$cpu', chipset = '$chipset', gpu = '$gpu', os_ios = '$os', ram = '$ram', rom = '$rom', external = '$external', battery = '$battery', talktime = '$talktime', sensiors = '$sensiors', bluetooth = '$bluetooth', gps = '$gps', wifi = '$wifi', usb = '$usb', sound = '$sound', others = '$others' WHERE id = '$id'";
			
		$run = mysqli_query($con,$sql);

			if ($run == true) {
				?>
					<script>swal("Update","Update Successfully!","success");</script>
				<?php
			}else{
				?>
					<script>swal("Failed","Update Failed!","error");</script>
				<?php
			}
		}
	

?>

<?php include 'footer.php'; ?>