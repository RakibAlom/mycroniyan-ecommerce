<?php include 'header.php';
	
	$id = $_GET['id'];

	include '../include/dbcon.php';

	$sql = "SELECT * FROM admin WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>

	<div class="col-md-9">
		<div class="container">
			<h4 id="sub-title"><?php echo $result['name']; ?> Information</h4>
			<table class="table table-center table-bordered table-dark">
				<tr>
					<td colspan="2" align="center"><img height="280px" width="240px" class="image-fluid" src="../images/admin/<?php echo $result['image']; ?>"></td>
				</tr>
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
					<th>Profession</th>
					<td></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><?php echo $result['address']; ?></td>
				</tr>
				<tr>
					<th>Action</th>
					<td>
						<a href="admin_edit.php?id=<?php echo $result['id']; ?>" class="btn btn-info btn-sm">Edit</a>
						<a href="admin_delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

<?php include 'footer.php'; ?>