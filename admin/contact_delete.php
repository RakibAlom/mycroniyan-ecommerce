<?php 
	$id = $_GET['id'];

	include '../include/dbcon.php';
	$sql = "DELETE FROM contact WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		?>
			<script>
				alert('Product Deleted!');
				window.open('contact.php','_self');
			</script>
		<?php
	}else{
		?>
			<script>
				alert('Failed!');
				window.open('contact.php','_self');
			</script>
		<?php
	}
?>