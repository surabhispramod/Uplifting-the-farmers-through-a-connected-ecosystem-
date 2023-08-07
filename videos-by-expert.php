<?php include './zvinodiwa/database.php' ;?>
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


	</header>
	<div class="limiter">
		<div style="background-image: url('./img/agriculture.jpg');background-size: cover; ">
			<div class="container" style="padding: 10px;background:rgba(255, 255,255,0.75);">
			<h3>All Videos by Expert</h3> <br>

			 <?php 
			$a=1;
                    $query=mysqli_query($db,"select * from `video_by_experts` order by `id` desc ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <div class="row border " style="padding: 5px;">
                          	<div class="col-md-6">
                          		<p> <?php echo $row['titled'];?></p>
                          	</div>
                          	<div class="col-md-4 text-right">
                          		<u>Posted on: <?php echo $row['added_on'];?> </u>
                          	</div> 
                          	<div class="col-md-2 text-right">
                          		<u>Posted By: <?php echo $row['posted_by'];?> </u>
                          	</div>
                          	<br> <br>  <br>
                              
                            <div class="col-md-8" style="margin:auto;">
                            	<p><?php echo $row['iframe'];?></p></div>
                        </div> <hr>
                                     
                          <?php
                       
                            $a++;
                      }
                                          
                       
                      ?>
                      

			
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