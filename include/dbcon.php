<?php 
	
	$con = mysqli_connect('localhost','root','','mshop');

	if (!$con) {
			?>

			<script>
				alert('Database Not Connected')
			</script>

			<?php
		}	

?>