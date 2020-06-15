<?php include 'header.php'; ?>


	<!-- Database -->
	<div class="col-md-9">
		<div class="container-fluid mt-2">
			<h4 id="sub-title">Book Add</h4>

			<form class="mt-4" action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Book Name</label>
							<input class="form-control" type="" name="name" placeholder="name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Category</label>
							<select class="form-control" name="category">
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
							<input class="form-control" type="" name="author" placeholder="author">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Price</label>
							<input class="form-control" type="" name="price" placeholder="price">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Publisher</label>
							<input class="form-control" type="" name="publisher" placeholder="publisher">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>ISBN</label>
							<input class="form-control" type="" name="isbn" placeholder="isbn number">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Edition</label>
							<input class="form-control" type="" name="edition" placeholder="edition date">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Number of Page</label>
							<input class="form-control" type="" name="pages" placeholder="pages">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Country</label>
							<input class="form-control" type="" name="country" placeholder="country name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Language</label>
							<input class="form-control" type="" name="language" placeholder="language">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>PDF Link</label>
							<input class="form-control" type="" name="pdf_link" placeholder="pdf link (optional)">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Summary</label>
							<textarea class="form-control" name="summary"></textarea>
						</div>
					</div>
					<div class="col-md-4 container">
						<div class="form-group">
							<label>Images</label><br>
							<input class="alert alert-light" type="file" name="image" placeholder="">
						</div>
					</div>
				</div>

				<button class="btn btn-primary btn-block" name="submit">Upload New Book</button>
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
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		include '../include/dbcon.php';

		$upload_path = '../images/book/';
		$upload_check = move_uploaded_file($tmp, $upload_path.$image);
		if ($upload_check == true) {
			
			$sql = "INSERT INTO book (image,price,name,category,author,publisher,isbn,edition,pages,country,language,pdf_link,summary) VALUES ('$image','$price','$name','$category','$author','$publisher','$isbn','$edition','$pages','$country','$language','$pdf_link','$summary')";
			$run = mysqli_query($con,$sql);

			if ($run == true) {
				?>
					<script>swal("Added","Book Add Successfully!","success");</script>
				<?php
			}else{
				?>
					<script>swal("Failed","Book Not Add!","error");</script>
				<?php
			}
		}else{
			?>
				<script>swal("Upload Failed","Image Upload Failed","error");</script>
			<?php
		}
	}



	include 'footer.php'; 
?>


