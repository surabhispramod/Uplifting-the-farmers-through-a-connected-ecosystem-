<?php
session_start();

 require_once('../zvinodiwa/database.php');
      // require_once('../zvinodiwa/session.php');
 $email = $_SESSION['email'];
 $fetch = mysqli_query($db,"SELECT * FROM `farmers` WHERE `farmers`.`email` = '$email';");
$user_id = 0;
 while($row=mysqli_fetch_assoc($fetch)){
  $user_id = $row['id'];
 }
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
                            if(isset($db,$_POST['submit'])){
                            $title = mysqli_real_escape_string($db,$_POST['title']);
                            
                            $price = mysqli_real_escape_string($db,$_POST['price']);
                            $phone = mysqli_real_escape_string($db,$_POST['phone']);
                            $description = mysqli_real_escape_string($db,$_POST['description']);         
                            
                           
                                 
                  
                $sql = "INSERT INTO `market` ( `title`, `description`, `posted_by`, `price`, `stats`) VALUES ('$title', '$description', '$user_id', '$price', '0') ";
                $results = mysqli_query($db,$sql);
 
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for posting for sale ';?></div>
                        <?php
                        }else{
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
            <p class="card-header sammac-media">What you want to sell</p>    
            <div class="card-body">
              <form action="sale.php" method="post">
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Title</label>
                 <input type="text" name="title" class="form-control"   placeholder="Enter title" required>
             </div>  

             <div class="col-md-6 form-group">
                 <label>Price</label>
                 <input type="number" name="price"  placeholder="Enter price" class="form-control">
             </div> 
                    
             </div>  
         <div class="row">
             <div class="col-md-6 form-group">
                 <label>Phone</label>
                 <input type="tel" name="phone" class="form-control" pattern="{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" maxlength="20" placeholder="Enter Phone" required>
             </div>  
              
            

              <div class="col-md-6 form-group">
                 <label>Description</label>
                 <input type="text" name="description" placeholder="Enter description" class="form-control">
             </div> 
             
             </div>  
                <div class="row">
                <div class="col-md-6 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span> Add</button>  
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