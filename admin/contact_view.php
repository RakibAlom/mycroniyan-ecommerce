<?php include 'header.php';
	
	$id = $_GET['id'];

	include '../include/dbcon.php';

	$sql = "SELECT * FROM contact WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
	<div class="col-md-9">
		<div class="container">
			<h4 id="sub-title">Message From <?php echo $result['name']; ?></h4>
			<table class="table table-bordered table-dark">
				<tr>
					<th>Name</th>
					<td><?php echo $result['name']; ?></td>
				</tr>
				<tr>
					<th>Phone Number</th>
					<td><?php echo $result['phone']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $result['email']; ?></td>
				</tr>
				<tr>
					<th>Message</th>
					<td><?php echo $result['message']; ?></td>
				</tr>
				<tr>
					<th>Action</th>
					<td>
						<a href="contact_delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			</table>
		</div>
	</div>


<?php include 'footer.php'; ?>