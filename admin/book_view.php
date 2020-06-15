<?php include 'header.php';
	
	$id = $_GET['id'];

	include '../include/dbcon.php';

	$sql = "SELECT * FROM book WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>

	<div class="col-md-9">
		<div class="container">
			<h4 id="sub-title"><?php echo $result['name']; ?> Book Details</h4>
			
					<table class="table table-center table-bordered table-dark">
						<tr>
							<td colspan="2" align="center">
								<img height="280px" width="240px" class="image-fluid" src="../images/book/<?php echo $result['image']; ?>">
								<h6 class="font-weight-bold mt-3"><?php echo $result['name']; ?></h6>
								<h4 class="mt-2">Price: <?php echo $result['price']; ?> ৳</h4>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="text-danger font-weight-bold">Basic Info</td>
						</tr>
						<tr>
							<th>Title</th>
							<td><?php echo $result['name']; ?></td>
						</tr>
						<tr>
							<th>Category</th>
							<td><?php echo $result['category']; ?></td>
						</tr>
						<tr>
							<th>Author</th>
							<td><?php echo $result['author']; ?></td>
						</tr>
						<tr>
							<th>Publisher</th>
							<td><?php echo $result['publisher']; ?></td>
						</tr>
						
						<tr>
							<th>ISBN</th>
							<td><?php echo $result['isbn']; ?></td>
						</tr>
						<tr>
							<th>Edition</th>
							<td><?php echo $result['edition']; ?></td>
						</tr>
						<tr>
							<th>Number of Page</th>
							<td><?php echo $result['pages']; ?></td>
						</tr>
						<tr>
							<th>Country</th>
							<td><?php echo $result['country']; ?></td>
						</tr>
						<tr>
							<th>Language</th>
							<td><?php echo $result['language']; ?></td>
						</tr>
						<tr>
							<th>PDF Link</th>
							<td><?php echo $result['pdf_link']; ?></td>
						</tr>
						<tr>
							<th colspan="2" class="text-danger">Summery</th>
						</tr>
						<tr>
							<td colspan="2"><?php echo $result['summary']; ?></td>
						</tr>
						<tr>
							<th>Action</th>
							<td>
								<a href="book_edit.php?id=<?php echo $result['id']; ?>" class="btn btn-info btn-sm">Edit</a>
								<a href="book_delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
							</td>
						</tr>
					</table>
				
		</div>
	</div>

<?php include 'footer.php'; ?>