<?php
session_start();
// if(!isset($_SESSION['email'])){

//     header("Location: ../index.php");
//     }
$farmerName =  $_SESSION['name'];
  $db = new mysqli('localhost','root','','agriculture_assistance_presidency');
     


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Community | Dashboard </title>
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
            <p class="card-header sammac-media">Community </p>    
            <div class="card-body">
              <div id="tabs-4">
              	<!-- /////////// -->

                <?php 
                $get = mysqli_query($db, "SELECT * FROM `queries` ;");

                 if(mysqli_num_rows($get) == 0){  ?>
                  <div class="alert alert-warning  animated shake" > No problems posted</div>

                <?php }
                else{ ?>
                  <table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Posted By</th>
                    <th>Subject</th>
                    <th>Details</th>
                    <th>Action</th>
                    
                    </tr>
                </thead>
                    <?php
                     $a=1;
                    $query=mysqli_query($db,"select * from `queries` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['name'];?></td> 
                            <td><?php echo $row['title'];?></td>   
                            <td><?php echo $row['description'];?></td>
                             <td> <a class="btn btn-info" href="query.php?id=<?php echo $row['id']; ?>"><span class="fa fa-eye"></span>  </td>  
                 
                          </tr>
                          <?php
                       
                            $a++;
                      }
                                          
                      
                
                      ?>
                </table>
           <?php
                }
                ?>
                
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