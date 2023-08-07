<?php 
session_start();
require_once('zvinodiwa/database.php');
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farming Assistance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/agriculture.jpg'); ">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Provide Feedback below:
				</span>
				<?php 
				if(isset($_POST['submit'])){
					$name = trim($_POST['name']);
					$phone = trim($_POST['phone']);
					$feedback = trim($_POST['feedback']);

					$save = mysqli_query($db, "INSERT INTO `feedback` (`name`, `phone`, `description`) VALUES ('$name', '$phone', '$feedback');");
					if($save){ ?>
						<script type="text/javascript">
							alert("Thank you for your feedback. Your feedback is submitted.");
						</script>


					<?php }
					else{ ?> 
					<script type="text/javascript">
							alert("Unknown Error occured, try again later.");
						</script><?php }
				}

				?>
				<form class="login100-form p-5 validate-form p-b-33 p-t-5" method="post" action="feedback.php" >
					<label>Enter Your Name:</label>
					<input type="text" name="name" class="form-control" required=""><br>
					<label>Enter Your Phone:</label>
					<input type="tel" name="phone" class="form-control" required=""> <br>
					<label>Enter Feedback:</label>
					<textarea class="form-control" name="feedback"></textarea>
					<br>
					<button class="login100-form-btn" type="submit" name="submit">
							Submit Feedback
						</button>

					

				</form>


				<br>
				<a href="login.php" class="text-white">Back to login Page</a>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>