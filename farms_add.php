<?php 
session_start();
require_once('zvinodiwa/database.php');
  ?>




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
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('img/agriculture.jpg'); ">
            <div class="wrap-login100 p-t-30 p-b-50 bg-white p-3">

                 <?php
                            if(isset($db,$_POST['submit'])){
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                            
                            $phone = mysqli_real_escape_string($db,$_POST['phone']);
                            $password = mysqli_real_escape_string($db,$_POST['password']);
                            $email = mysqli_real_escape_string($db,$_POST['email']);         
                            $password = md5($password);

                            $sql_e = "SELECT * FROM farmers WHERE phone ='$phone' OR email = '$email' ;";
                            $res_e = mysqli_query($db, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                            ?>
                             <div class="alert alert-danger  animated shake" >
                       <?php echo'Sorry the phone or email  is already registered';?></div>
                        <?php    
                       }else{      
                  
                $sql = "INSERT INTO farmers(name,email,phone,password)VALUES('$name',  '$email','$phone','$password')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for adding new farmer ';?></div>
                        <?php
                        }else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong';?></div>
                        <?php    
                          }      
                      }
                 }  ?> 
                <span class="login100-form-title p-b-41 text-dark">
                   Register As farmer
                </span>
                 <form action="farms_add.php" method="post">
             <div class="row">
             <div class="col-md-12 form-group">
                 <label>Name</label>
                 <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="Enter Full Name" required>
             </div>  

             <div class="col-md-12 form-group">
                 <label>Email</label>
                 <input type="email" name="email"  placeholder="Enter Email" class="form-control">
             </div> 
                    
                 
             </div>  
         <div class="row">
             <div class="col-md-12 form-group">
                 <label>Phone</label>
                 <input type="tel" name="phone" class="form-control" pattern="{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" maxlength="20" placeholder="Enter Phone" required>
             </div>  
              <div class="col-md-12 form-group">
                 <label>Password</label>
                 <input type="password" name="password" placeholder="Enter password" class="form-control">
             </div> 
             
             </div>  
                <div class="row">
                <div class="col-md-6 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span> Register Now</button>  
                </div> 
                 <div class="col-md-8 form-group">
                <a href="login.php" class="btn btn-info btn-sm">Already registered? Login here</a> 
                </div>    
                </div>
             </form>


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