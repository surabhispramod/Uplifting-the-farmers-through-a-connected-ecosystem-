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
                            $title = trim($_POST['title']);
                            $details = trim($_POST['details']);
                            $name_exp = $_SESSION['name'];
                                 
                  
                $sql = "INSERT INTO `post_by_expert` (`posted_by`, `title`, `details`, `added_on`) VALUES ( '$name_exp', '$title', '$details', '$date_t') ";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <?php echo'Thank you for adding post ';?></div>
                        
                           
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
            <p class="card-header sammac-media">Add Post </p>    
            <div class="card-body">
              <form  method="post" action="add-post.php">
             <div class="row">
             <div class="col-md-12 form-group">
                 <label>Title</label>
                 <input type="text" name="title" class="form-control" maxlength="200" placeholder="title" required>
             </div>  
               
                

                 
             </div>  
         <div class="row">
              <div class="col-md-12 form-group">
                 <label>Details</label>
                 <textarea name="details" class="form-control" placeholder="Enter details" required></textarea>
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