<?php include 'header.php'; ?>
<!-- Main Content -->
	<div id="main-content">
		<div class="container">
			<div class="jumbotron bg-white mt-5">
				<div class="row">
					<div class="col-md-6 left">
						<h3 class="font-weight-bold">Microniyan-এর সাথে থাকুন</h3>
						<p>বাংলাদেশের সবচেয়ে বড় মার্কেট প্লেস </p>
						<div id="condition">
							<p><span id="box"><i class="fa fa-file-text-o"></i></span> আপনার নিজের এডগুলি পোস্ট করা শুরু করুন।</p>
							<p><span id="box"><i class="fa fa-search"></i></span> পরে দেখার জন্য এডকে ফেভারিট হিসেবে মার্ক করুন।</p>
							<p><span id="box"><i class="fa fa-cogs"></i></span> সুবিধাজনক সময়ে আপনার এডগুলো দেখুন এবং পরিচালনা করুন।</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="container">
							<h3 class="text-center font-weight-bold">Get In Touch</h3>
							<hr>
							<form action="" class="mt-2" method="post">
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Name" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="phone" placeholder="Phone Number" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="email" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="subject" placeholder="Subject" required="">
								</div>
								<div class="form-group">
									<textarea class="form-control" type="text" name="message" placeholder="Message" required=""></textarea>
								</div>
								<button type="submit" class="btn btn-success btn-block" name="sign_in">Send Message</button>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	if (isset($_POST['sign_in'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		include 'include/dbcon.php';

		$sql = "INSERT INTO contact(name,phone,email,subject,message) VALUES ('$name','$phone','$email','$subject','$message')";
		$run = mysqli_query($con,$sql);

		if ($run == true) {
			?>
				<script>swal("SENT","Message Deliver Successfully","success");</script>
			<?php
		}else{
			?>
				<script>swal("Failed","Message Deliver Fail","error");</script>
			<?php
		}
	}


?>
<?php include 'footer.php'; ?>