<?php 
	include 'header.php';
	include 'include/dbcon.php';
	$id = $_GET['id'];
	$sql1 = "SELECT * FROM mobile WHERE id = '$id'";
	$run1 = mysqli_query($con,$sql1);
	$result1 = mysqli_fetch_assoc($run1);

	$sql2 = "SELECT * FROM men WHERE id = '$id'";
	$run2 = mysqli_query($con,$sql2);
	$result2 = mysqli_fetch_assoc($run2);
?>




<?php include 'footer.php'; ?>