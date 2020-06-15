<?php include 'header.php';
	
	$id = $_GET['id'];

	include '../include/dbcon.php';

	$sql = "SELECT * FROM computer WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>

	<div class="col-md-9">
		<div class="container">
			<h4 id="sub-title"><?php echo $result['name']; ?> Detalis</h4>
			
					<table class="table table-center table-bordered table-dark">
						<tr>
							<td colspan="2" align="center">
								<img height="280px" width="240px" class="image-fluid" src="../images/computer/<?php echo $result['image']; ?>">
								<h6 class="font-weight-bold  mt-3"><?php echo $result['name']; ?></h6>
								<h4 class="mt-2">Price: <?php echo $result['price']; ?> ৳</h4>
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
							<th>Name</th>
							<td><?php echo $result['name']; ?></td>
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
						<tr>
							<th>Action</th>
							<td>
								<a href="editadmin.php?id=<?php echo $result['id']; ?>" class="btn btn-info btn-sm">Edit</a>
								<a href="deleteadmin.php?id=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
							</td>
						</tr>
					</table>
				
		</div>
	</div>

<?php include 'footer.php'; ?>