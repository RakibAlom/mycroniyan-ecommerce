<?php 
	$id = $_GET['id'];

	include '../include/dbcon.php';
	$sql = "DELETE FROM electronics WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		?>
			<script>
				alert('Product Deleted!');
				window.open('electronics_product.php','_self');
			</script>
		<?php
	}else{
		?>
			<script>
				alert('Failed!');
				window.open('electronics_product.php','_self');
			</script>
		<?php
	}
?>