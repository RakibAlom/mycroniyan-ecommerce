<?php include 'header.php'; ?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Mobile Product Add</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Brand</label>
							<input class="form-control" type="" name="brand" placeholder="brand name" required="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Model</label>
							<input class="form-control" type="" name="model" placeholder="model" required="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" type="" name="price" placeholder="price" required="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Release Date</label>
							<input class="form-control" type="" name="date" placeholder="release date">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Body Type</label>
							<input class="form-control" type="" name="body_type" placeholder="type">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Body Color</label>
							<input class="form-control" type="" name="body_color" placeholder="color">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Deminesion</label>
							<input class="form-control" type="" name="deminesion" placeholder="deminesion">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Weight</label>
							<input class="form-control" type="" name="weight" placeholder="weight">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>SIMs</label>
							<input class="form-control" type="" name="sim" placeholder="sim">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Protection</label>
							<input class="form-control" type="" name="protection" placeholder="protection">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Display Type</label>
							<input class="form-control" type="" name="display_type" placeholder="type">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Display Size</label>
							<input class="form-control" type="" name="display_size" placeholder="size">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>2G</label>
							<input class="form-control" type="" name="g2" placeholder="2g brand">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>3G</label>
							<input class="form-control" type="" name="g3" placeholder="3g brand">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>4G</label>
							<input class="form-control" type="" name="g4" placeholder="4g brand">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Speed</label>
							<input class="form-control" type="" name="speed" placeholder="Net Speed">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Main Camera</label>
							<input class="form-control" type="" name="main_camera" placeholder="main camera">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Camera Features</label>
							<input class="form-control" type="" name="features" placeholder="features">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Videos</label>
							<input class="form-control" type="" name="videos" placeholder="Videos Resulation">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Selfie Camera</label>
							<input class="form-control" type="" name="selfie" placeholder="selfie">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>CPU</label>
							<input class="form-control" type="" name="cpu" placeholder="cpu">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Chipset</label>
							<input class="form-control" type="" name="chipset" placeholder="chipset">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>GPU</label>
							<input class="form-control" type="" name="gpu" placeholder="gpu">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>OS/iOS</label>
							<input class="form-control" type="" name="os" placeholder="operating system" required="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>RAM</label>
							<input class="form-control" type="" name="ram" placeholder="RAM" required="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>ROM</label>
							<input class="form-control" type="" name="rom" placeholder="ROM" required="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>External</label>
							<input class="form-control" type="" name="external" placeholder="secondary">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Battery</label>
							<input class="form-control" type="" name="battery" placeholder="battery">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Talk Time</label>
							<input class="form-control" type="" name="talktime" placeholder="talktime">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Sensiors</label>
							<input class="form-control" type="" name="sensiors" placeholder="Sensiors">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Bluetooth</label>
							<input class="form-control" type="" name="bluetooth" placeholder="bluetooth">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>GPS</label>
							<input class="form-control" type="" name="gps" placeholder="gps">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>WiFi</label>
							<input class="form-control" type="" name="wifi" placeholder="wifi">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>USB</label>
							<input class="form-control" type="" name="usb" placeholder="usb">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Sound</label>
							<input class="form-control" type="" name="sound" placeholder="sound">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Others</label>
							<textarea name="others" class="form-control"></textarea>
						</div>
					</div>
					<div class="col-md-4 container">
						<div class="form-group">
							<label>Images</label><br>
							<input class="alert alert-light" type="file" name="image" placeholder="">
						</div>
					</div>
				</div>
				<button class="btn btn-primary btn-block" name="submit">Upload New Mobile Product</button>
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
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		include '../include/dbcon.php';

		$upload_path = '../images/mobile/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$image);
		if ($upload_check == true) {
		
			$sql = "INSERT INTO mobile (image,price,brand,model,release_date,body_type,color,deminesion,weight,sim,protection,display_type,size,2g,3g,4g,speed,main_camera,feature,videos,selfie_camera,cpu,chipset,gpu,os_ios,ram,rom,external,battery,talktime,sensiors,bluetooth,gps,wifi,usb,sound,others) VALUES ('$image','$price','$brand','$model','$date','$body_type','$body_color','$deminesion','$weight','$sim','$protection','$display_type','$display_size','$g2','$g3','$g4','$speed','$main_camera','$features','$videos','$selfie','$cpu','$chipset','$gpu','$os','$ram','$rom','$external','$battery','$talktime','$sensiors','$bluetooth','$gps','$wifi','$usb','$sound','$others')";
			
			$run = mysqli_query($con,$sql);
			if ($run == true) {
				?>
					<script>swal("Added","Mobile Add Successfully!","success");</script>
				<?php
			}else{
				?>
					<script>swal("Failed","Mobile Not Add!","error");</script>
				<?php
			}
		}else{
			?>
				<script>swal("Upload Failed","Image Upload Failed","error");</script>
			<?php
		}
	}

?>



<?php include 'footer.php'; ?>


