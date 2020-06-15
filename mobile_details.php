<?php 
	include 'header.php';
	include 'include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM mobile WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
						<p class="list-group-item header" href="">Mobile <i class="fa fa-angle-right"></i></p>
						<a class="list-group-item" href="">Smartphone</a>
						<a class="list-group-item" href="">Earphone</a>
						<a class="list-group-item" href="">Iphone</a>
						<a class="list-group-item" href="">Feature Phone</a>
						<a class="list-group-item" href="">Samsung</a>
						<a class="list-group-item" href="">Oppo</a>
						<a class="list-group-item" href="">Walton</a>
						<a class="list-group-item" href="">Lava</a>
						<a class="list-group-item" href="">Xiaomi</a>
						<a class="list-group-item" href="">Maximus</a>
						<a class="list-group-item" href="">Blackberry</a>
						<a class="list-group-item" href="">Google</a>
						<a class="list-group-item" href="">Nokia</a>
				</div>
				<div class="col-md-9" id="details-content">
					<br>
					<h3 id="sub-title"><?php echo $result['brand']; ?> <?php echo $result['model']; ?> Details</h3>
					<table class="table">
						<tr>
							<td colspan="2" align="center">
								<img src="images/mobile/<?php echo $result['image']; ?>">
								<h6 class="font-weight-bold mt-3"><?php echo $result['brand']; ?> <?php echo $result['model']; ?></h6>
								<h4 class="text-danger mt-2">Price: <?php echo $result['price']; ?> ৳</h4>
							</td>
						</tr>
						<tr>
							<th colspan="2" class="text-danger">Basic Info</th>
						</tr>
						<tr>
							<th>Brand</th>
							<td><?php echo $result['brand']; ?></td>
						</tr>
						<tr>
							<th>Model</th>
							<td><?php echo $result['model']; ?></td>
						</tr>
						<tr>
							<th>Release Date</th>
							<td><?php echo $result['release_date']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Body</th>
						</tr>
						<tr>
							<th>Type</th>
							<td><?php echo $result['body_type']; ?></td>
						</tr>
						<tr>
							<th>Color</th>
							<td><?php echo $result['color']; ?></td>
						</tr>
						<tr>
							<th>Deminesion</th>
							<td><?php echo $result['deminesion']; ?></td>
						</tr>
						<tr>
							<th>Weight</th>
							<td><?php echo $result['weight']; ?></td>
						</tr>
						<tr>
							<th>SIMs</th>
							<td><?php echo $result['sim']; ?></td>
						</tr>
						<tr>
							<th>Protection</th>
							<td><?php echo $result['protection']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Display</th>
						</tr>
						<tr>
							<th>Type</th>
							<td><?php echo $result['display_type']; ?></td>
						</tr>
						<tr>
							<th>Size</th>
							<td><?php echo $result['size']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Networks</th>
						</tr>
						<tr>
							<th>2G</th>
							<td><?php echo $result['2g']; ?></td>
						</tr>
						<tr>
							<th>3G</th>
							<td><?php echo $result['3g']; ?></td>
						</tr>
						<tr>
							<th>4G</th>
							<td><?php echo $result['4g']; ?></td>
						</tr>
						<tr>
							<th>Speed</th>
							<td><?php echo $result['speed']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Camera</th>
						</tr>
						<tr>
							<th>Main</th>
							<td><?php echo $result['main_camera']; ?></td>
						</tr>
						<tr>
							<th>Features</th>
							<td><?php echo $result['feature']; ?></td>
						</tr>
						<tr>
							<th>Videos</th>
							<td><?php echo $result['videos']; ?></td>
						</tr>
						<tr>
							<th>Selfie</th>
							<td><?php echo $result['selfie_camera']; ?></td>
						</tr>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Hardware</th>
						</tr>
						<tr>
							<th>CPU</th>
							<td><?php echo $result['cpu']; ?></td>
						</tr>
						<tr>
							<th>Chipset</th>
							<td><?php echo $result['chipset']; ?></td>
						</tr>
						<tr>
							<th>GPU</th>
							<td><?php echo $result['gpu']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Software</th>
						</tr>
						<tr>
							<th>OS/iOS</th>
							<td><?php echo $result['os_ios']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Memory</th>
						</tr>
						<tr>
							<th>RAM</th>
							<td><?php echo $result['ram']; ?></td>
						</tr>
						<tr>
							<th>ROM</th>
							<td><?php echo $result['rom']; ?></td>
						</tr>
						<tr>
							<th>External</th>
							<td><?php echo $result['external']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Commons</th>
						</tr>
						<tr>
							<th>Sensiors</th>
							<td><?php echo $result['sensiors']; ?></td>
						</tr>
						<tr>
							<th>Bluetooth</th>
							<td><?php echo $result['bluetooth']; ?></td>
						</tr>
						<tr>
							<th>GPS</th>
							<td><?php echo $result['gps']; ?></td>
						</tr>
						<tr>
							<th>WiFi</th>
							<td><?php echo $result['wifi']; ?></td>
						</tr>
						<tr>
							<th>USB</th>
							<td><?php echo $result['usb']; ?></td>
						</tr>
						<tr>
							<th>Sound</th>
							<td><?php echo $result['sound']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Others</th>
						</tr>
						<tr>
							<td colspan="2"><?php echo $result['others']; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>