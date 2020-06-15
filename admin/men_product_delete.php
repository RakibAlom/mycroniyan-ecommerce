<?php 
	$id = $_GET['id'];

	include '../include/dbcon.php';
	$sql = "DELETE FROM men WHERE id = '$id'";
	$run = mysqli_query($con,$sql);

	if ($run == true) {
		?>
			<script>
				alert('Delete Successfully');
				window.open('men_product.php','_self');
			</script>
		<?php
	}else{
		?>
			<script>
				alert('Failed');
				window.open('men_product.php','_self');
			</script>
		<?php
	}

?>