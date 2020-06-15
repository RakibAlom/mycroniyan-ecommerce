<?php 
	include 'header.php'; 
	include '../include/dbcon.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM book WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Book Details Edit</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Book Name</label>
							<input class="form-control" type="" name="name" value="<?php echo $result['name']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Category</label>
							<select class="form-control" name="category" value="<?php echo $result['category']; ?>">
								<option>Romantic</option>
								<option>Adventure</option>
								<option>Scienc Fiction</option>
								<option>Mythology</option>
								<option>Religion</option>
								<option>Psyco</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Author</label>
							<input class="form-control" type="" name="author" value="<?php echo $result['author']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" type="" name="price" value="<?php echo $result['price']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Publisher</label>
							<input class="form-control" type="" name="publisher" value="<?php echo $result['publisher']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>ISBN</label>
							<input class="form-control" type="" name="isbn" value="<?php echo $result['isbn']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Edition</label>
							<input class="form-control" type="" name="edition" value="<?php echo $result['edition']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Number of Page</label>
							<input class="form-control" type="" name="pages" value="<?php echo $result['pages']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Country</label>
							<input class="form-control" type="" name="country" value="<?php echo $result['country']; ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Language</label>
							<input class="form-control" type="" name="language" value="<?php echo $result['language']; ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>PDF Link</label>
							<input class="form-control" type="" name="pdf_link" value="<?php echo $result['pdf_link']; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Summary</label>
							<input class="form-control" name="summary" value="<?php echo $result['summary']; ?>">
						</div>
					</div>
				</div>

				<button class="btn btn-primary btn-block" name="submit">Update Details</button>
			</form>

		</div>
	</div>
</div>



<?php 

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$price = $_POST['price'];
		$publisher = $_POST['publisher'];
		$isbn = $_POST['isbn'];
		$edition = $_POST['edition'];
		$pages = $_POST['pages'];
		$country = $_POST['country'];
		$language = $_POST['language'];
		$pdf_link = $_POST['pdf_link'];
		$summary = $_POST['summary'];

		$sql = "UPDATE book SET name = '$name', category = '$category', author = '$author', price = '$price', publisher = '$publisher', isbn = '$isbn', edition = '$edition', pages = '$pages', country = '$country', language = '$language', pdf_link = '$pdf_link', summary = '$summary' WHERE id = '$id'";
		$run = mysqli_query($con,$sql);

		if ($run == true) {
			?>
				<script>swal("Updated","Details Update!","success");</script>
			<?php
		}else{
			?>
				<script>swal("Failed","Failed to Update!","error");</script>
			<?php
		}
	}




	include 'footer.php'; 
?>


