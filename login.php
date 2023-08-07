<?php 
session_start();
require_once('zvinodiwa/database.php');

if(isset($db,$_POST['submit'])){

	$role = trim($_POST['role']);
	if($role == "admin"){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $password= md5($password);
    $query1=mysqli_query($db,"SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'");

    $count = mysqli_num_rows($query1);
    if($count != 0){
	while($row=mysqli_fetch_array($query1)){
             $db_name=$row["name"];
		}
		    $_SESSION["email"]=$email;
            $_SESSION["name"]=$db_name;
            $_SESSION["username"]=$db_name;
            ?>
            <script type="text/javascript">
            // Simulate an HTTP redirect:
           window.location.replace("./sys/dashboard.php");
            </script>
		
	  <?php   
    } // user found
    else{
    	echo "<script>alert('Invalid Email or Password.')</script>";
    }
    }
 // if farmer
else if($role == "farmer"){

	 $email = mysqli_real_escape_string($db,$_POST['email']);
     $password = mysqli_real_escape_string($db,$_POST['password']);
     $password= md5($password);

	$check = mysqli_query($db, "SELECT * FROM `farmers` WHERE `email` = '$email' AND `password` = '$password';");

	$count = mysqli_num_rows($check);
	if($count == 1){ 
		while($row=mysqli_fetch_array($check)){
             $db_name=$row["name"];
             $user_id = $row["id"];
            
		}

		$check = mysqli_query($db, "SELECT * FROM `wallet` WHERE `id` = '$user_id' ;");

		    $_SESSION["email"] = $email;
            $_SESSION["name"] = $db_name;
            $_SESSION["id"] = $user_id;
            
            ?>
		 <script type="text/javascript">
            // Simulate an HTTP redirect:
           window.location.replace("./farmer/dashboard.php");
            </script>
	<?php }
	else{  echo "<script>alert('Invalid Email or Password.')</script>"; }

	

}
else if ($role == "expert") {
	
	$email = mysqli_real_escape_string($db,$_POST['email']);
     $password = mysqli_real_escape_string($db,$_POST['password']);
     $password= md5($password);

	$check = mysqli_query($db, "SELECT * FROM `experts` WHERE `email` = '$email' AND `password` = '$password';");

	$count = mysqli_num_rows($check);
	if($count == 1){ 
		while($row=mysqli_fetch_array($check)){
             $db_name=$row["name"];
            
		}
		    $_SESSION["email"]=$email;
            $_SESSION["name"]=$db_name;
            
            ?>
		 <script type="text/javascript">
            // Simulate an HTTP redirect:
           window.location.replace("./expert/dashboard.php");
            </script>
	<?php }
	else{  echo "<script>alert('Invalid Email or Password.')</script>"; }

	
}


}  ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agriculture Support System Login</title>
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
	<?php include 'header.php'; ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/agriculture.jpg'); ">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="login.php">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" style="text-align: center;">
						<select name="role" required="">
						 <option disabled="" selected="">- Select Role-</option>
						 <option value="farmer">Farmer</option>
						 <option value="expert">Expert</option>
						 <option value="admin">Admin</option>
							
						</select>
						
					</div>



					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
					</div>

				</form>

				<br>
				<a href="./" class="btn btn-info btn-sm"> Goto Home </a> 
				<a href="farms_add.php" class="btn btn-info btn-sm ">Register as Farmer</a> 
				<a href="feedback.php" class="btn btn-primary btn-sm">Feedback</a>
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<?php include 'footer.php'; ?>
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