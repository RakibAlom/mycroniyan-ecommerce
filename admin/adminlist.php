<?php include 'header.php';

	include '../include/dbcon.php';

	$sql = "SELECT * FROM admin";
	$run = mysqli_query($con,$sql);	
	$count = 1;

?>
	<!-- Main Content -->
	<div class="col-md-9">
		<div class="container-fluid">
			<div class="mt-2">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<a href="addadmin.php" class="btn btn-primary">Make New Admin</a>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="input-group">
								<input type="text" name="search" class="form-control" placeholder="search here">
								<div class="input-group-append">
									<button class="btn btn-success"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- Database -->
			<div class="database">
				<h4 id="sub-title">Admin List</h4>
				<table class="table table-hover table-striped">
					<tr>
						<th>SL</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Email</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)){ ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['phone']; ?></td>
						<td><?php echo $result['address']; ?></td>
						<td><?php echo $result['email']; ?></td>
						<td><img src="../images/admin/<?php echo $result['image']; ?>" width="45px" height="45px"></td>
						<td>
							<a href="admin_view.php?id=<?php echo $result['id']; ?>" class="btn btn-sm btn-success">View</a>
							<a href="admin_edit.php?id=<?php echo $result['id']; ?>" class="btn btn-info btn-sm">Edit</a>
							<a href="admin_delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>

				<?php } ?>
				</table>
			</div>
		</div>
	</div>

<?php include'footer.php'; ?>

