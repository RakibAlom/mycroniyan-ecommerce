<?php 
	include 'header.php';
	include '../include/dbcon.php';

	$sql = "SELECT * FROM contact";
	$run = mysqli_query($con,$sql);
	$count = 1;
?>
	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<form action="" method="post">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<button class="btn btn-primary" disabled="">Contact List</button>
					</div>
					<div class="col-md-6 col-sm-6 ml-auto">
						<div class="input-group mb-3">
							<input type="search" class="form-control" name="search" placeholder="search here">
							<div class="input-group-append">
								<button class="btn btn-success" name="search"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div id="details" class="mt-2">
				<table class="table table-hover table-striped">
					<tr>
						<th>SL</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				<?php while($result = mysqli_fetch_assoc($run)) { ?>
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['phone']; ?></td>
						<td><?php echo $result['email']; ?></td>
						<td>
							<a href="contact_view.php?id=<?php echo $result['id']; ?>" class="btn btn-success">View</a>
							<a href="contact_delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>