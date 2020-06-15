<?php include 'header.php';
	
	$id = $_GET['id'];

	include '../include/dbcon.php';

	$sql = "SELECT * FROM men WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>

	<div class="col-md-9">
		<div class="container">
			<h4 id="sub-title">Product Details</h4>
			
					<table class="table table-center table-bordered table-dark">
						<tr>
							<td colspan="2" align="center">
								<img height="280px" width="240px" class="image-fluid" src="../images/men/<?php echo $result['image']; ?>">
								<h6 class="font-weight-bold mt-3"><?php echo $result['name']; ?></h6>
								<h4 class="mt-2">Price: <?php echo $result['price']; ?> ৳</h4>
							</td>
						</tr>
						<tr>
							<th>Product Name</th>
							<td><?php echo $result['name']; ?></td>
						</tr>
						<tr>
							<th>Item code</th>
							<td><?php echo $result['code']; ?></td>
						</tr>
						<tr>
							<th>Product type</th>
							<td><?php echo $result['type']; ?></td>
						</tr>
						<tr>
							<th>Fabric</th>
							<td><?php echo $result['fabric']; ?></td>
						</tr>
						<tr>
							<th>Sleeve</th>
							<td><?php echo $result['sleeve']; ?></td>
						</tr>
						<tr>
							<th>Fabrication</th>
							<td><?php echo $result['fabrication']; ?></td>
						</tr>
						<tr>
							<th>Color</th>
							<td><?php echo $result['color']; ?></td>
						</tr>
						<tr>
							<th>Size</th>
							<td><?php echo $result['size']; ?></td>
						</tr>
						<tr>
							<th>Action</th>
							<td>
								<a href="men_product_edit.php?id=<?php echo $result['id']; ?>" class="btn btn-info btn-sm">Edit</a>
								<a href="men_product_edit.php?id=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
							</td>
						</tr>
					</table>
				
		</div>
	</div>

<?php include 'footer.php'; ?>