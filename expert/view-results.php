


<?php
session_start();
// if(!isset($_SESSION['email'])){

//     header("Location: ../index.php");
//     }

  $db = new mysqli('localhost','root','','agriculture_assistance_presidency');
     


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
            <p class="card-header sammac-media">Lab Results </p>    
            <div class="card-body">
              <div id="tabs-4">
              	<!-- /////////// -->
                <form action="view-results.php" method="post">
                 <div class="row">
                  <div class="col-md-8">
                  <input type="number" name="mobile" placeholder="Enter Phone" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="submit" name="search" class="btn btn-info">
                </div>
                   </div>
                  </form> 

                  <hr>

<!-- //////////////////////////// -->
 <?php


if(isset($_POST['search'])){
$phone = $_POST['mobile'];

$sql = mysqli_query($db,"SELECT * FROM `owner` WHERE `mobile` = '$phone'") or die("Failed fetching data");

while($row  = mysqli_fetch_assoc($sql)){

   $surname =  $row['surname'];
   $firstname =  $row['firstname'];
   $taluk =  $row['taluk'];
   $district =  $row['place'];
}

$sql1 = mysqli_query($db,"SELECT * FROM `laboratory` WHERE `mobile` = '$phone'") or die("Failed fetching data");
$sodium = $boron = $chloride = $calcium = $zinc = $copper = "";

while($chem  = mysqli_fetch_assoc($sql1)){
  $ph =  $chem['ph'];
  $bod =  $chem['bod'];
   $sodium =  $chem['Na'];
   $calcium =  $chem['Ca'];
   $chloride =  $chem['cl'];
   $potasium =  $chem['K'];
   $phosphorous =  $chem['P'];
   $nitro = $chem['N'];
}

  ///// 

 ?>


<div class="bg-white p-3">

  <h4 class="text-center">Suggestions</h4>

  <h6 class="text-center">Name: <?php echo $firstname." ". $surname?>  |  Taluk: 
    <?php echo $taluk. " | District: ". $district ?></h6>



<hr>
<div class="bg-white p-3">
  <?php 
  //////////////////// grapes .////////////

  // ph 

  if($ph < 6.5 ){
    $result_ph = "Low ";
    $EffectPh = "use less than 3%of the organic matter";
  }
else if($ph >= 6.5 && $ph < 7.5){
   $result_ph = "Neutral ";
    $EffectPh = "Suitable";
}
else{
  $result_ph = "Adequete ";
  $EffectPh = "use 2% to 3% of the organic matter";
}
// bodium 

  if($bod < 6 ){
    $result_bod = "Clean ";
    $EffectBod = "use Required amount of organic manure";
  }
else{
   $result_bod = "Polluted ";
    $EffectBod = "use large amount of manure";
}
//// nitrogen
  if($nitro < 1.5 ){
    $result_nitro = "vegetible growth reduces ";
    $EffectNitro = "use 20kg/acre";
  }
else{
   $result_nitro = "Suitable ";
    $EffectNitro = "";
}
//// phosphorous
  if($phosphorous < 0.1 ){
    $result_phos = "Growth of flower bud in the plant reduces ";
    $EffectPhos = "use 60gm/tree";
  }
else{
   $result_phos = "Sufficient ";
    $EffectPhos = " ";
}
//// potassium
  if($potasium < 0.8 ){
    $result_pot = "Quality og the fruit decreases ";
    $EffectPot = "use 60gm/tree";
  }
else{
   $result_pot = "Suitable ";
    $EffectPot = " ";
}




// sod
if ($sodium < 144) {
  $result_sod = "Sensitive";
  $EffectSod = "It leads to decreae in the growth of the plant";
 

} 
else {
  $result_sod = "Good";
  $EffectSod = "Can be used";
  
} 

//// chloride
if ($chloride < 0.1) {
  $result_chlo = "Sensitive";
  $EffectChlo = "Damages Roots shoots ";
 
} 
else {
  $result_chlo = "Good";
  $EffectChlo = " Can be used";
  
} 

//// calcium
if ($calcium < 3) {
  $result_Calc = "Sensitive";
  $EffectCalc = "Growth of leaves increases";
 

} 
elseif ($calcium > 3 && $calcium < 20) {
  $result_Calc = "Good";
  $EffectCalc = " Boost new leaf and bud growth";
  
} 

else {
 $result_Calc = "Tolorent";
  $EffectCalc = " Effects the bud growth";
}
////
  ?>

 
    <table class="table table-bordered table-warning " id="pomo">
      <tr>
         <td colspan="3" class="text-center "><h2>Crop:  Pomogranate</h2></td>
      </tr>
  <tr>
    <th>Sl No</th>
    <th>Element</th>
    <th>Condition</th>
  </tr>
  <tr>
    <td>1</td>
    <td>PH</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $ph?></span>
      <?php echo $result_sod; ?>, <?php echo $EffectSod ;?> </td>
  </tr> 
  <tr>
    <td>2</td>
    <td>BODIUM</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $bod?></span>
      <?php echo $result_bod; ?>, <?php echo $EffectBod ;?> </td>
    
  </tr> 
  <tr>
    <td>3</td>
    <td>Nitrogen</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $nitro?></span>
      <?php echo $result_nitro; ?>, <?php echo $EffectNitro ;?> </td>
    
  </tr> 
  <tr>
    <td>4</td>
    <td>Phosphorous</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $phosphorous?></span>
      <?php echo $result_phos; ?>, <?php echo $EffectPhos ;?> </td>
    
  </tr> 
    <tr>
    <td>5</td>
    <td>Potassium</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $potasium ;?></span>
      <?php echo $result_pot; ?>, <?php echo $EffectPot ;?> </td>
  </tr>  
 
  <tr>
    <td>6</td>
    <td>Sodium (NA)</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $sodium?></span>
      <?php echo $result_sod; ?>, <?php echo $EffectSod ;?> </td>
    
  </tr> 
  <tr>
    <td>7</td>
    <td>Calcium</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $calcium ; ?></span>
      <?php echo $result_Calc; ?>, <?php echo $EffectCalc ;?> </td>
    
  </tr> 
  <tr>
    <td>8</td>
    <td>Chloride</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $chloride ; ?></span>
      <?php echo $result_chlo; ?>, <?php echo $EffectChlo ;?> </td>
    
  </tr> 

  <tr style="">
    <th></th>
    <th>Generated Date</th>
    <th><?php date_default_timezone_set("Asia/Kolkata");

    echo date("d/m/Y") ?></th>

  </tr>
</table> 

  <button type="button" id="btnExport"  onclick="Export()" class="btn btn-info" >Download Data
</button>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('pomo'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("pomogranate.pdf");
                }
            });
        }
    </script>
<hr>

<?php 
//// nitrogen
  if($nitro < 1.44){
    $result_nitro = "Reduces vegetable growth ";
    $EffectNitro = "use 120kg/acre/year";
  }
else{
   $result_nitro = "Suitable ";
    $EffectNitro = " Can be used";
}
//// phosphorous
  if($phosphorous < 0.28 ){
    $result_phos = "Flower bud growh ";
    $EffectPhos = "use 120kg/acre/year";
  }
else{
   $result_phos = "Sufficient ";
    $EffectPhos = " ";
}
//// potassium
  if($potasium < 1.61 ){
    $result_pot = "decrease the quality of grape ";
    $EffectPot = "use 320kg/Acre/year";
  }
else{
   $result_pot = "Suitable ";
    $EffectPot = " for growth";
}


?>
    <table class="table table-bordered table-warning " id="grapes">
       <tr>
         <td colspan="3" class="text-center "><h2>Crop:  Grapes</h2></td>
      </tr>
  <tr>
    <th>Sl No</th>
    <th>Element</th>
    <th>Condition</th>
  </tr>
  <tr>
    <td>1</td>
    <td>PH</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $ph?></span>
      <?php echo $result_sod; ?>, <?php echo $EffectSod ;?> </td>
  </tr> 
  <tr>
    <td>2</td>
    <td>BODIUM</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $bod?></span>
      <?php echo $result_bod; ?>, <?php echo $EffectBod ;?> </td>
    
  </tr> 
  <tr>
    <td>3</td>
    <td>Nitrogen</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $nitro?></span>
      <?php echo $result_nitro; ?>, <?php echo $EffectNitro ;?> </td>
    
  </tr> 
  <tr>
    <td>4</td>
    <td>Phosphorous</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $phosphorous?></span>
      <?php echo $result_phos; ?>, <?php echo $EffectPhos ;?> </td>
    
  </tr> 
    <tr>
    <td>5</td>
    <td>Potassium</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $potasium ;?></span>
      <?php echo $result_pot; ?>, <?php echo $EffectPot ;?> </td>
  </tr>  
 
  <tr>
    <td>6</td>
    <td>Sodium (NA)</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $sodium?></span>
      <?php echo $result_sod; ?>, <?php echo $EffectSod ;?> </td>
    
  </tr> 
  <tr>
    <td>7</td>
    <td>Calcium</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $calcium ; ?></span>
      <?php echo $result_Calc; ?>, <?php echo $EffectCalc ;?> </td>
    
  </tr> 
  <tr>
    <td>8</td>
    <td>Chloride</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $chloride ; ?></span>
      <?php echo $result_chlo; ?>, <?php echo $EffectChlo ;?> </td>
    
  </tr> 
  <tr style="">
    <th></th>
    <th>Generated Date</th>
    <th><?php date_default_timezone_set("Asia/Kolkata");

    echo date("d/m/Y") ?></th>

  </tr>

</table> 

  <button type="button" id="btnExport"  onclick="ExportGrapes()" class="btn btn-info" >Download Data
</button>

    <script type="text/javascript">
        function ExportGrapes() {
            html2canvas(document.getElementById('grapes'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("grapes.pdf");
                }
            });
        }
    </script>
<hr>


<?php 

//// nitrogen
  if($nitro < 3.5 ){
    $result_nitro = "vegetible growth reduces ";
    $EffectNitro = "use 75kg/acre";
  }
else{
   $result_nitro = "Suitable ";
    $EffectNitro = " ";
}
//// phosphorous
  if($phosphorous < 0.4 ){
    $result_phos = "Leads to damage during the budding of the flower ";
    $EffectPhos = "use 40kg/acre";
  }
else{
   $result_phos = "Sufficient ";
    $EffectPhos = " ";
}
//// potassium
  if($potasium < 2.8 ){
    $result_pot = "Quality og the fruit decreases ";
    $EffectPot = "use 25kg/Acre";
  }
else{
   $result_pot = "Suitable ";
    $EffectPot = " for growth";
}


?>
    <table class="table table-bordered table-warning " id="tomato">
       <tr>
         <td colspan="3" class="text-center "><h2>Crop:  Tomato</h2></td>
      </tr>
  <tr>
    <th>Sl No</th>
    <th>Element</th>
    <th>Condition</th>
  </tr>
  <tr>
    <td>1</td>
    <td>PH</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $ph?></span>
      <?php echo $result_sod; ?>, <?php echo $EffectSod ;?> </td>
  </tr> 
  <tr>
    <td>2</td>
    <td>BODIUM</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $bod?></span>
      <?php echo $result_bod; ?>, <?php echo $EffectBod ;?> </td>
    
  </tr> 
  <tr>
    <td>3</td>
    <td>Nitrogen</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $nitro?></span>
      <?php echo $result_nitro; ?>, <?php echo $EffectNitro ;?> </td>
    
  </tr> 
  <tr>
    <td>4</td>
    <td>Phosphorous</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $phosphorous?></span>
      <?php echo $result_phos; ?>, <?php echo $EffectPhos ;?> </td>
    
  </tr> 
    <tr>
    <td>5</td>
    <td>Potassium</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $potasium ;?></span>
      <?php echo $result_pot; ?>, <?php echo $EffectPot ;?> </td>
  </tr>  
 
  <tr>
    <td>6</td>
    <td>Sodium (NA)</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $sodium?></span>
      <?php echo $result_sod; ?>, <?php echo $EffectSod ;?> </td>
    
  </tr> 
  <tr>
    <td>7</td>
    <td>Calcium</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $calcium ; ?></span>
      <?php echo $result_Calc; ?>, <?php echo $EffectCalc ;?> </td>
    
  </tr> 
  <tr>
    <td>8</td>
    <td>Chloride</td>
    <td>
     <span class="badge badge-primary">Value: <?php echo $chloride ; ?></span>
      <?php echo $result_chlo; ?>, <?php echo $EffectChlo ;?> </td>
    
  </tr> 
 
<tr style="">
    <th></th>
    <th>Generated Date</th>
    <th><?php date_default_timezone_set("Asia/Kolkata");

    echo date("d/m/Y") ?></th>

  </tr>
</table>
<button type="button" id="btnExport"  onclick="ExportTomato()" class="btn btn-info" >Download Data
</button>

    <script type="text/javascript">
        function ExportTomato() {
            html2canvas(document.getElementById('tomato'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("tomato.pdf");
                }
            });
        }
    </script>
</div>

</div>

<?php } ?>



                  <!-- //////////////// -->





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