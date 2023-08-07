


<?php
session_start();
// if(!isset($_SESSION['email'])){

//     header("Location: ../index.php");
//     }

  $db = new mysqli('localhost','root','','agric');
     


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farmer | Dashboard </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
     <?php  include_once ('page-headers.php'); ?>
            <hr>
          

            <div class="card">
            <p class="card-header sammac-media">Enter Details</p>    
            <div class="card-body">
              <div id="tabs-4">
              	<!-- /////////// -->
<?php

//pass values 
if (isset($_POST['Send'])) 
{
		 // connect to the database
 $surname = $_POST['surname'];
 $address = $_POST['address'];
 $taluk = $_POST['taluk'];
 $place = $_POST['place'];
 $firstname = $_POST['firstname'];
 $mobile = $_POST['mobile'];
 $pincode = $_POST['pincode'];
 $email = $_POST['email'];
 $samplingdate = $_POST['samplingdate'];
 $date = $_POST['date'];
 $sql = " INSERT INTO `owner`(`surname`,`address`,`taluk`,`place`,`firstname`,`mobile`, `pincode`, `email`,`samplingdate`,`date`) VALUES ('$surname','$address', '$taluk', '$place', '$firstname', '$mobile', '$pincode', '$email','$samplingdate', '$date')";
    if (mysqli_query($db, $sql))
    { ?>
    <div class="alert alert-success  animated shake" >
     <?php echo'Data Added Successfully';?></div>
  <?php  }
    else
    { ?>
      <div class="alert alert-warning  animated shake" >
     <?php echo'Not able to add data';?></div>
  <?php  }
}
 ?>
  <h4 class="text-center">EVALUTION OF SUITABILITY OF IRRIGATION WATER</h4><br>
  <h6 class="text-center" >FIELD DATA</h6><br>


  <form action="enter-details.php" method="post">
    <div class="container-fluid">
    <div class="row justify-content-md-center">
	   <div class="col-md-6">
		 <label>Surname :</label>
		 <input type="text" name="surname" placeholder="Surname" class="form-control">
		 <br>
		 <label>Address :</label>
		 <textarea class="form-control" name="address" placeholder="Enter Address"></textarea><br>
		 <label>Taluk :</label>
     <select class="form-control" name="taluk">
          <option>Doodballapur</option>
          <option>Chikballapur</option>
          <option>Chintamani</option>
          <option>Gowribidnur</option>
          <option>Sidlaghatta</option>
        </select><br>
		 <br>
		 <label>District :</label>
		 <select class="form-control" name="place">
    			<option>Doodballapur</option>
    			<option>Chikballapur</option>
          <option>Kolar</option>
          <option>Bangalore Rural</option>
          <option>Bangalore Urban</option>
    		</select><br>
	   </div>
	   <div class="col-md-6">
		 <label>First Name :</label>
		 <input type="text" name="firstname" placeholder="Enter First Name" class="form-control">
		 <br>
		 <label>Mobile Number :</label>
		 <input type="number" name="mobile" placeholder="Enter Mobile No" class="form-control">
		 <br>
		 <label>Pincode :</label>
		 <input type="number" name="pincode" placeholder="Enter pin-code" class="form-control"><br>
    		<label>Email-Id :</label>
		 <input type="Email-id" name="email" placeholder="Enter your Email" class="form-control" required="email"><br>
     <label>Sampling Date :</label>
     <input type="Date" name="samplingdate" class="form-control" placeholder="Sampling Date"><br>
     <label>Date :</label>
     <input type="Date" name="date" class="form-control" placeholder="Select Date" required="date"><br>
	 </div>
  </div>
	</div>
  <button type="submit" name="Send" class="btn btn-dark form-control ">Submit</button>
</form><br><br>

               </div> <!-- // tabs -->
            </div>
            </div>  
             <div class="line"></div>
                <footer>
           
            </footer>
           <div class="line"></div> 
        
        </div>
    </div>
  
       
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="../vendor/Jquery-ui/jquery-ui.min.js"></script>
   
</body>
</html>




