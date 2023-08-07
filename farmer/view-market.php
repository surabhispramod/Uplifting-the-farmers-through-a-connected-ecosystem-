<?php
session_start();

 require_once('../zvinodiwa/database.php');
     

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
     <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php  include_once ('page-headers.php'); ?>
            <div class="line"></div>
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header sammac-media">All market rates </p>    
            <div class="card-body">
              <div id="tabs-4"><table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
                <thead>
                <tr>
                    <th>Sl no</th>
                    <th>Pincode</th>
                    <th>Date</th>
                    <th>Corn</th>
                    <th>Wheat</th>
                    <th>Rice</th>
                    <th>Raagi</th>
                    <th>Sugarcane</th>
                    </tr>
                </thead>
                    <?php
                     $a=1;
                    $query=mysqli_query($db,"select * from `market_rate` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                              <td><?php echo $row['pincode'];?></td> 
                            <td><?php echo $row['updated'];?></td> 
                            <td><?php echo $row['corn'];?></td>   
                            <td><?php echo $row['wheat'];?></td>
                            <td><?php echo $row['rice'];?></td>
                            <td><?php echo $row['ragi'];?></td>
                            <td><?php echo $row['sugarcane'];?></td>
                           
                           
                          </tr>
                          <?php
                       
                            $a++;
                      }
                                          
                      
                
                      ?>
                </table> </div>
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
    <script src="../vendor/DataTables/datatables.min.js"></script> 
        <script>
    $(document).ready( function () {
    $('#mhishi').DataTable();
           
    } );
        </script>
       
   
</body>
</html>