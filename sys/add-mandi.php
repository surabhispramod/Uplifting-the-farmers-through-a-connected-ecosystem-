<?php 
session_start();

require_once('../zvinodiwa/database.php');
      // require_once('../zvinodiwa/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farming Assistance | Dashboard </title>
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
            <div class="line"></div>
            <?php
                            if(isset($_POST['save'])){
                            date_default_timezone_set("Asia/Kolkata");
                            $date_t = date('d/m/Y');
                            $corn = trim($_POST['corn']);
                            $wheat = trim($_POST['wheat']);
                            $rice = trim($_POST['rice']);
                            $ragi = trim($_POST['ragi']);
                            $sugarcane = trim($_POST['sugarcane']);
                            $pincode = trim($_POST['pincode']);
                                 
                  
                $sql = "INSERT INTO `mandi` (`updated`, `corn`, `wheat`, `rice`, `ragi`, `sugarcane`,`pincode`) VALUES ('$date_t', '$corn', '$wheat', '$rice', '$ragi', '$sugarcane','$pincode') ";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <?php echo'Thank you for adding Mandi Rates ';?></div>
                        
                           
                        <?php  } else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong';?></div>
                        <?php    
                          }      
                      }
                ?>    
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header sammac-media">Add Mandi rates for today (Price per kg) </p>    
            <div class="card-body">
              <form  method="post" action="add-mandi.php">
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Corn</label>
                 <input type="number" name="corn" class="form-control" maxlength="200" placeholder="Corn Rate" required>
             </div>  
               
                <div class="col-md-6 form-group">
                 <label>Wheat</label>
                 <input type="number" name="wheat" class="form-control" maxlength="200" placeholder="Wheat Rate" required>
             </div>  

                 
             </div>  
         <div class="row">
              <div class="col-md-6 form-group">
                 <label>Rice</label>
                 <input type="number" name="rice" class="form-control" maxlength="200" placeholder="Rice Rate" required>
             </div>  
              
               <div class="col-md-6 form-group">
                 <label>Ragi</label>
                 <input type="number" name="ragi" class="form-control" maxlength="200" placeholder="Ragi Rate" required>
             </div>  
             
             
                 
             </div>  
             <div class="row">
                 <div class="col-md-6 form-group">
                 <label>Sugarcane</label>
                 <input type="number" name="sugarcane" class="form-control" maxlength="200" placeholder="Sugarcane Rate" required>
             </div>  
              <div class="col-md-6 form-group">
                 <label>Pincode of mandi</label>
                 <input type="number" name="pincode" class="form-control" maxlength="200" placeholder="Pincode" required>
             </div> 
             </div>

                <div class="row">

                <div class="col-md-6 form-group">
                <input type="submit" name="save" class="btn btn-success btn-block" value="Add">
                </div> 
                 <div class="col-md-6 form-group">
                <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>    
                </div>
                
             </form>
            </div>
            </div>    
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
    <script>
  $( function() {
   $("#ssm").datepicker({
    minDate: 0,
    maxDate:1,
});
      
  } );
  </script>
   
</body>
</html>