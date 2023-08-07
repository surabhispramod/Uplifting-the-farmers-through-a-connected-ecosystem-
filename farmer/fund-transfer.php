<?php
session_start();
// if(!isset($_SESSION['email'])){

//     header("Location: ../index.php");
//     }

  

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
            <?php
            date_default_timezone_set("Asia/Kolkata");
            $date_t = date('h:i a'). "<br>". date('d/m/Y');
            include  '../zvinodiwa/database.php';
            // $get_sender1 = mysqli_query($db,"SELECT * FROM `farmers` WHERE `email` = '$sender_email';");
            // 	while($row1 = mysqli_fetch_assoc($get_sender1)){
            // 	$sender_id1 = $row1['id'];

            // 	}
            $user_logged_in = $_SESSION['id'];
            if(isset($_POST['transfer'])){
            	$receiver_id = trim($_POST['id']);
            	// echo $receiver_id;
            	$amount_to_transfer = trim($_POST['amount']);
            	$sender_email = $_SESSION['email'];
            	
    // echo $receiver_phone;
            	 $sender_id
            	= $amount_in_wallet
            	
            	= $new_balance_sender
            	= $receiver
            	= $receiver_phone
            	=  $amount_in_wallet = 0;

		$get_sender = mysqli_query($db,"SELECT * FROM `farmers` WHERE `email` = '$sender_email';");
            	while($row = mysqli_fetch_assoc($get_sender)){
            	$sender_id = $row['id'];

            	}
            	////// receiver ///
            	//echo "receiver id: ". $receiver_id ."<br>";
           $get_receiver = mysqli_query($db, "SELECT * FROM `farmers` WHERE `farmers`.`id` = '$receiver_id';");
           $count_receiver = mysqli_num_rows($get_receiver);
           if($count_receiver == 0){
  				echo '<div class="alert alert-danger">No user found with given id number</div>';
           }
           else{
           	
           	 $receiver_wallet = mysqli_query($db,"SELECT * FROM `wallet` WHERE `farmer` = '$receiver_id';");

           while($receiver_wallet_get = mysqli_fetch_assoc($receiver_wallet)){
           	$receiver_balance = intval($receiver_wallet_get['amount'])	;

           }

           ///////

             $get_wallet_amount = mysqli_query($db, "SELECT * FROM `wallet` WHERE `farmer` = '$sender_id';");
             
             //echo "<br> sender: ". $sender_id. "<br>";

             while($wallet = mysqli_fetch_assoc($get_wallet_amount))
             {
             	$amount_in_wallet =
             	 intval($wallet['amount']);

             	 //echo "amount in wallet " .$amount_in_wallet;

             }

             if($amount_to_transfer > $amount_in_wallet){
             	echo '<div class="alert alert warning">Insufficient fund</div>';
             }
             else{
             	$new_balance_sender
             	 = intval($amount_in_wallet) - intval($amount_to_transfer);
             	 //echo "amount to transfer: ".$amount_to_transfer;
             	//echo "new balance sender: ".$new_balance_sender;

             	$new_receiver_balance = intval($receiver_balance) +  intval($amount_to_transfer);

             	$update_sender_wallet = mysqli_query($db, "UPDATE `wallet` SET `amount` = '$new_balance_sender' WHERE `wallet`.`farmer` = '$sender_id'; ");

             	if($update_sender_wallet){

             	$update_receiver_wallet = mysqli_query($db, "UPDATE `wallet` SET `amount` = '$new_receiver_balance' WHERE `wallet`.`farmer` = '$receiver_id';");
             	    if($update_receiver_wallet){
             	    	echo '<div class="alert alert-success">Amount Transferred. Your new balance: <u>'.$new_balance_sender.'</u></div>';
             	    	$save_transaction = mysqli_query($db, "INSERT INTO `transactions` (`sender`, `receiver`, `amt`, `date_time`) VALUES ('$sender_id', '$receiver_id','$amount_to_transfer','$date_t') ;");
             	    }
             	} // sender wallet reduced
             	else{
             		echo '<div class="alert alert-danger">Error transfer.Problem in sender side</div>';
             	}


             }

             } // receiver exist

         } // click

             ?>
            
         
            <h3>Fund Transfer</h3>
            <form action="fund-transfer.php" method="post">
            <div class="row">
            	<div class="col-md-5">
            		<label>Enter id</label>
            		<input type="number" name="id" required placeholder="Enter id of receiving party" class="form-control">

            	</div>
            	<div class="col-md-5">
            		<label>Enter Amount:</label>
            		<input type="number" name="amount" required placeholder="Enter Amount" class="form-control">
            	</div>
            	<div class="col-md-2"> <br>
            		<input type="submit" name="transfer" value="Transfer" class="btn btn-outline-success">

            	</div>


            </div>
        </form> <!-- //  -->
             <br>
             <div class="line"></div>
             <h3>Transactions: Transferred</h3>
             <?php 
             $fetch_transfer = mysqli_query($db,"SELECT * FROM `transactions` WHERE `transactions`.`sender` = '$user_logged_in' ORDER BY id Desc;");
      $counting = mysqli_num_rows($fetch_transfer);
  if($counting == 0){
  	echo '<div class="alert alert-warning">No Transactions for Transfers</div>';
  }
  else{ ?>
  	<table class="table table-bordered">
  		<tr>
  			<td>SL no</td>
  			<td>Date</td>
  			<td>Trans Number</td>
  			<td>Sent to</td>
  			<td>Amount</td>

  		</tr>
  		<?php 
  		$i =1;
  		 while($row_transfer= mysqli_fetch_assoc($fetch_transfer)){  ?>
  		 	<tr>
  		 		<td><?php echo $i; $i = $i +1; ?></td>
  		 		<td><?php echo $row_transfer['date_time']; ?></td>
  		 		<td><?php echo 'TRANS' .$row_transfer['id']; ?></td>

  		 			
  		 				<?php $sent_to = $row_transfer['receiver'];

  		 				$get_sent_to = mysqli_query($db, "SELECT * FROM `farmers` WHERE `id` = '$sent_to';");
  		 	while($rcv_acc = mysqli_fetch_assoc($get_sent_to)){
  		 		echo '<td>Name: '.$rcv_acc['name']. 
  		 		'<br>ID: '.$sent_to.'</td>';

  		 				} ?>
  		 				<td>&#8377; <?php  echo $row_transfer['amt']; ?></td>

  		 				
  		 	</tr>

  		<?php } ?>
  		
  	</table>

<?php  }

             ?>
              <div class="line"></div>
             <h3>Transactions: Received</h3>
             <?php 
             $fetch_transfer = mysqli_query($db,"SELECT * FROM `transactions` WHERE `transactions`.`receiver` = '$user_logged_in' ORDER BY id Desc;");
      $counting = mysqli_num_rows($fetch_transfer);
  if($counting == 0){
  	echo '<div class="alert alert-warning">No Transactions for RECEIVE</div>';
  }
  else{ ?>
  	<table class="table table-bordered">
  		<tr>
  			<td>SL no</td>
  			<td>Date</td>
  			<td>Trans Number</td>
  			<td>Received from</td>
  			<td>Amount</td>

  		</tr>
  		<?php 
  		$i =1;
  		 while($row_transfer= mysqli_fetch_assoc($fetch_transfer)){  ?>
  		 	<tr>
  		 		<td><?php echo $i; $i = $i +1; ?></td>
  		 		<td><?php echo $row_transfer['date_time']; ?></td>
  		 		<td><?php echo 'RECEIVE' .$row_transfer['id']; ?></td>

  		 			
  		 				<?php $sent_to = $row_transfer['receiver'];

  		 				$get_sent_to = mysqli_query($db, "SELECT * FROM `farmers` WHERE `id` = '$sent_to';");
  		 	while($rcv_acc = mysqli_fetch_assoc($get_sent_to)){
  		 		echo '<td>Name: '.$rcv_acc['name']. 
  		 		'<br>ID: '.$sent_to.'</td>';

  		 				} ?>
  		 				<td>&#8377; <?php  echo $row_transfer['amt']; ?></td>

  		 				
  		 	</tr>

  		<?php } ?>
  		
  	</table>

<?php  }

             ?>




                <footer>
           
            </footer>
           

	
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