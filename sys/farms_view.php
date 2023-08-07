<?php 
session_start();

require_once('../zvinodiwa/database.php');
      // require_once('../zvinodiwa/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farming Assistance  | Dashboard </title>
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
                <?php 
                if(isset($_POST['update'])){
                    $id = $_GET['id'];

                    $balance = $_POST['balance'];

                    $check_if_exist = mysqli_query($db, "SELECT * FROM `wallet` WHERE `farmer` = '$id';");
                    $count = mysqli_num_rows($check_if_exist);
                    if($count == 0){
                    $save = mysqli_query($db, "INSERT INTO `wallet` (`farmer`, `amount`) VALUES ('$id', '$balance') ;");
                    if($save){
                        echo '<div class="alert alert-success">Wallet updated</div>';
                    }
                    else{
                        echo '<div class="alert alert-danger">error updating wallet</div>';
                    }
                } // count 0
                else{
                    $balance_onWallet = $wallet_id = 0;
                    while($row = mysqli_fetch_assoc($check_if_exist)){
                        $balance_onWallet = intval($row['amount']);
                        $wallet_id = $row['id'];


                    } // while
                        $new_balance = $balance_onWallet + $balance;
                    $update = mysqli_query($db, "UPDATE `wallet` SET `amount` = '$new_balance' WHERE `wallet`.`id` = '$wallet_id' ;");

                     if($update){
                        echo '<div class="alert alert-success">Wallet updated</div>';
                    }
                    else{
                        echo '<div class="alert alert-danger">error updating wallet</div>';
                    }

                }
                }

                ?>
            <p class="card-header sammac-media">All Farmers</p>    
            <div class="card-body">
              <div id="tabs-4"><table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Wallet</th>
                    
                    <th>ACTION</th>
                    </tr>
                </thead>
                    <?php
                     $a=1;
                    $query=mysqli_query($db,"select * from `farmers` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['name'];?></td> 
                            <td><?php echo $row['email'];?></td>   
                            <td><?php echo $row['phone'];?></td>
                            <td> <?php 
                            $id = $row['id'];
                            $fetch_wallet = mysqli_query($db, "SELECT * FROM `wallet` WHERE `farmer` = '$id';");
                            $count_wallet = mysqli_num_rows($fetch_wallet);
                            $balance = 0;
                if($count_wallet != 0 ){
                     while($wallet_amt = mysqli_fetch_assoc($fetch_wallet)){
                        $balance = $wallet_amt['amount'];

                                }
                            ?>
                                <form method="post" action="farms_view.php?id=<?php echo $id; ?>">
                                    <label>Users Wallet balance: RS <?php echo $balance; ?></label> <br>
                                <input type="number" name="balance" placeholder="Enter Amount to Add">
                                <input type="submit" name="update" value="Update Wallet" class="btn btn-outline-danger btn-sm">
                            </form>
                        <?php } else{ ?>
                            <form method="post" action="farms_view.php?id=<?php echo $id; ?>" >
                                <label>Users wallet balance = RS 0 </label> <br>
                                <input type="number" name="balance" placeholder="Enter Amount to Add">
                                <input type="submit" name="update" value="Update Wallet" class="btn btn-outline-danger btn-sm">
                            </form>
                       <?php } ?>
                            </td>
                            
                             <td>    
                  <a href="farms_view.php?edited=1&idx=<?php echo $row['id']; ?>"  class="btn btn-danger"><span class="fa fa-trash"></span></a>
                              </td>  
                          </tr>
                          <?php
                       
                            $a++;
                      }
                                          
                       if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $db->prepare("DELETE FROM farmers WHERE id = ? LIMIT 1"))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                    <div class="alert alert-warning " >
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Successfully! </strong><?php echo'Record Successfully Deleted';?></div>
                   <script>
                       setTimeout(function () {
                        window.location.href = "farms_view.php";
                        }, 5000); 
                      
                    </script>
            
                    <?php
                          }
                          

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