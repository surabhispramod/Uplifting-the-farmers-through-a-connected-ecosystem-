


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
            <p class="card-header sammac-media">Enter Lab reports</p>    
            <div class="card-body">
              <div id="tabs-4">
              	<!-- /////////// -->


              <?php 
if (isset($_POST['Send'])) 
{
    
 $ph = $_POST['ph'];
 $bod = $_POST['bod'];
 $cl = $_POST['cl'];
 $N = $_POST['N'];
 $na = $_POST['na'];
 $ca = $_POST['ca'];
 $P = $_POST['P'];
 $K = $_POST['K'];
 $mobile = $_POST['mobile'];
 $sql = " INSERT INTO `laboratory`(`ph`,`bod`,`cl`,`N`,`na`,`ca`, `P`, `K`, `mobile`) VALUES ('$ph','$bod', '$cl', '$N', '$na', '$ca', '$P', '$K', '$mobile')";
    if (mysqli_query($db, $sql))
    { ?>
     <div class="alert alert-success  animated shake" >  Data Added Successfully</div>
   <?php }
    else
    { ?>
      <div class="alert alert-warning  animated shake" >  Not able to add</div>
  <?php  }
}

 ?>

<h4 class="text-center">EVALUTION OF SUITABILITY OF IRRIGATION WATER</h4><br>
  <h6 class="text-center" >Laboratory Determinations</h6><br>
<form action="enter-sampling.php" method="post">
  <div class="row">
    <div class="col-md-4 mt-4">
     <label>PH :</label>
     <input type="text" name="ph" class="form-control">
     <br>
     <label>BOD (mg/l) :</label>
     <input type="text" name="bod" class="form-control">
     <br>
     <label>mobile:</label>
     <input type="number" name="mobile" class="form-control">
   </div>
     <div class="col-md-4">
        <h3 class="text-center">ANIONS</h3>
     <label>Cl (me/L) :</label>
     <input type="text" name="cl" class="form-control"><br>
      <label>Nitrogen (N)(%) :</label>
     <input type="text" name="N" class="form-control">
  </div>
  <div class="col-md-4">
        <h3 class="text-center">MAIN CATIONS</h3>
     <label>Na (me/L) :</label>
     <input type="text" name="na"  class="form-control">
     <br>
     <label>Ca (me/L) :</label>
     <input type="text" name="ca"  class="form-control">
     <br>
     <label>Phosphorous(P)(%) :</label>
     <input type="text" name="P" class="form-control">
     <br>
     <label>Potassium (K)(%) :</label>
     <input type="text" name="K"  class="form-control">
     <br>
  </div>
</div>
<button type="submit" name="Send" class="btn btn-dark form-control ">Submit</button>
</form>

      


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