<?php 
	$id = $_GET['id'];

	include '../include/dbcon.php';
	$sql = "DELETE FROM book WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		?>
			<script>
				alert('Product Deleted!');
				window.open('book.php','_self');
			</script>
		<?php
	}else{
		?>
			<script>
				alert('Failed!');
				window.open('book.php','_self');
			</script>
		<?php
	}
?>