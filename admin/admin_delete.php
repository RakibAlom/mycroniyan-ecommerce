<?php

	include 'header.php'; 
	
	$id = $_GET['id'];

	include '../include/dbcon.php';

	$sql = "DELETE FROM admin WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		?>
			<script>
				window.alert('Admin Deleted Successfully');
				window.open('adminlist.php','_self');
			</script>
		<?php
	}else{
		?>
			<script>
				swal('Failed! Admin Not Delete');
				window.open('adminlist.php','_self');
			</script>
		<?php
	}
	
 ?>