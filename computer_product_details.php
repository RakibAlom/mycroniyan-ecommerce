<?php 
	include 'header.php';
	include 'include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM computer WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
						<p class="list-group-item header" href="">Computer <i class="fa fa-angle-right"></i></p>
						<a class="list-group-item" href="">Apple</a>
						<a class="list-group-item" href="">Dell</a>
						<a class="list-group-item" href="">Asus</a>
						<a class="list-group-item" href="">HP</a>
						<a class="list-group-item" href="">Samsung</a>
						<a class="list-group-item" href="">Lenovo</a>
						<a class="list-group-item" href="">RAM</a>
						<a class="list-group-item" href="">Hard Disk</a>
						<a class="list-group-item" href="">DVD-R</a>
						<a class="list-group-item" href="">KeyBoard</a>
						<a class="list-group-item" href="">Mouse</a>
						<a class="list-group-item" href="">Microphone</a>
						<a class="list-group-item" href="">UPS</a>
				</div>
				<div class="col-md-9" id="details-content">
					<h3 id="sub-title"><?php echo $result['name']; ?> Details</h3>
					<table class="table">
						<tr>
							<td colspan="2" align="center">
								<img src="images/computer/<?php echo $result['image']; ?>">
								<h6 class="font-weight-bold mt-3"><?php echo $result['name']; ?></h6>
								<h4 class="text-danger mt-2">Price: <?php echo $result['price']; ?> ৳</h4>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="text-danger font-weight-bold">Basic Info</td>
						</tr>
						<tr>
							<th>Computer Type</th>
							<td><?php echo $result['type']; ?></td>
						</tr>
						<tr>
							<th>Brand</th>
							<td><?php echo $result['brand']; ?></td>
						</tr>
						<tr>
							<th>Processor Type</th>
							<td><?php echo $result['processor']; ?></td>
						</tr>
						<tr>
							<th>Processor Speed</th>
							<td><?php echo $result['processor_speed']; ?></td>
						</tr>
						<tr>
							<th>Motherboard</th>
							<td><?php echo $result['motherboard']; ?></td>
						</tr>
						<tr>
							<th>Monitor</th>
							<td><?php echo $result['monitor']; ?></td>
						</tr>
						<tr>
							<th>RAM</th>
							<td><?php echo $result['ram']; ?></td>
						</tr>
						<tr>
							<th>Hard Disk</th>
							<td><?php echo $result['hard_disk']; ?></td>
						</tr>
						<tr>
							<th>Disk Type</th>
							<td><?php echo $result['disk_type']; ?></td>
						</tr>
						<tr>
							<th>Graphics Card</th>
							<td><?php echo $result['graphics_card']; ?></td>
						</tr>
						<tr>
							<th>Audio/Speaker</th>
							<td><?php echo $result['audio']; ?></td>
						</tr>
						<tr>
							<th>Networking</th>
							<td><?php echo $result['networking']; ?></td>
						</tr>
						<tr>
							<th>Keyboard</th>
							<td><?php echo $result['keyboard']; ?></td>
						</tr>
						<tr>
							<th>Mouse</th>
							<td><?php echo $result['mouse']; ?></td>
						</tr>
						<tr>
							<th>Modem</th>
							<td><?php echo $result['modem']; ?></td>
						</tr>
						<tr>
							<th>Casing</th>
							<td><?php echo $result['casing']; ?></td>
						</tr>
						<tr>
							<th class="text-danger" colspan="2">Others</th>
						</tr>
						<tr>
							<td colspan="2"><?php echo $result['others'] ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>