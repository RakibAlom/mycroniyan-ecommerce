<?php 
	$id = $_GET['id'];

	include 'header.php';
	include 'include/dbcon.php';
	$sql = "SELECT * FROM book WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3 list-group text-center" id="submenu">
					<p class="list-group-item header" href="">Book <i class="fa fa-angle-right"></i></p>
					<a class="list-group-item" href="">Love Story</a>
					<a class="list-group-item" href="">Science Fiction</a>
					<a class="list-group-item" href="">Adventure Book</a>
					<a class="list-group-item" href="">Comics Book</a>
					<a class="list-group-item" href="">Mithology</a>
					<a class="list-group-item" href="">Onubad Book</a>
					<a class="list-group-item" href="">Western Book</a>
					<a class="list-group-item" href="">English Book</a>
					<a class="list-group-item" href="">Programming Book</a>
					<a class="list-group-item" href="">Educational Book</a>
					<a class="list-group-item" href="">Children Book</a>
					<a class="list-group-item" href="">Horror Book</a>
					<a class="list-group-item" href="">Ohter</a>
				</div>
				<div class="col-md-9" id="details-content">
					<h3 id="sub-title"><?php echo $result['name']; ?> Book Details</h3>
					
					<table class="table">
						<tr>
							<td colspan="2" align="center">
								<img src="images/book/<?php echo $result['image']; ?>">
								<h6 class="font-weight-bold mt-3"><?php echo $result['name']; ?></h6>
								<h4 class="text-danger mt-2">Price: <?php echo $result['price']; ?> ৳</h4>
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
					</table>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>