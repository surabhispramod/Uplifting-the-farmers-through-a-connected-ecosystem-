<?php
session_start();
// if(!isset($_SESSION['email'])){

//     header("Location: ../index.php");
//     }
$farmerName =  $_SESSION['name'];
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
            <p class="card-header sammac-media">Post your Query </p>    
            <div class="card-body">
              <div id="tabs-4">
              	<!-- /////////// -->

                <?php 
                if(isset($_POST['post'])){
                  $name = trim($_POST['name']);
                  $subject = trim($_POST['subject']);
                  $description = trim($_POST['description']);

                  $insert = mysqli_query($db, "INSERT INTO `queries` (`name`, `title`, `description`) VALUES ('$name', '$subject', '$description');");

                  if($insert){ ?>
                    <div class="alert alert-success  animated shake" > Query Added Successfully</div>
                 

                 <?php  }
                 else{ ?>
                  <div class="alert alert-warning  animated shake" > Error occured! Try again later</div>
                 <?php }
                }
                ?>
                <form action="interact.php" method="post">
                 <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" name="name" value="<?php echo $farmerName; ?>">
                  <input type="text" name="subject" placeholder="Enter Subject" class="form-control">
                </div>
                
                <div class="col-md-6">
                  <textarea class="form-control" name="description" placeholder="Enter Details"></textarea>
                </div>
                   </div>
                   <div class="col-md-6">
                  <input type="submit" name="post" class="btn btn-info" name="Post Query">
                </div>
                  </form> 

                  <hr>





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