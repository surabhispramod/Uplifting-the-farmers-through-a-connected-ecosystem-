<!DOCTYPE html>
<html>
<head>
  <title>Owner Individual Data</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <section class="container">
  <div>
  <br>
  <a href="#" class="btn btn-dark pull-left" role="button" aria-pressed="true" style="margin-top:10px;">Input Data</a>
  <a href="#" class="btn btn-info pull-right" role="button" aria-pressed="true" style="margin-top:10px;">Print</a>
  <h1 class="text-center">Specific Ion Toxicity</h1><br>
</div>
<div class="row"><div class="col-md-3">
  </div>
  <div class="col-md-6">
 
<form action="toxicity.php" method="post">
  <input type="number" name="mobile" placeholder="Enter Phone">
  <input type="submit" name="search">
  </form> 
</div>
<div class="col-md-3">
  </div>
  </div>
<?php
include 'connect.php';
if(isset($_POST['search'])){
$phone = $_POST['mobile'];

$sql = mysqli_query($conn,"SELECT * FROM `laboratory` WHERE `mobile` = '$phone'") or die("Failed fetching data");
$sodium = $boron = $chloride = $calcium = $zinc = $copper = "";

while($row  = mysqli_fetch_assoc($sql)){

   $sodium =  $row['Na'];
   
   $calcium =  $row['Ca'];
   // $zinc =  $row[''];
   // $copper =  $row[''];
   // $magnesium =  $row['mg'];
   $Chloride =  $row['cl'];
   $potasium =  $row['K'];

   $phosphorous =  $row['P'];



}

if ($sodium < 144) {
  $result_sodium = "Sensitive";
  $sug_sod1 = " Grapes";
  $sug_sod2 = " Pomogranate";

} 
elseif ($sodium > 144 && $sodium < 229) {
  $result_sodium = "Moderately Sensitive";
  
} 
  
elseif ($sodium > 229 && $sodium < 458) {
 $result_sodium = "Moderately Tolorent";
$sug_sod1 = "Tomato";
}

else {
 $result_sodium = "Moderately Tolorent";
}

////////////////////

//  Chloride

if ($Chloride < 178) {
  $result_Chloride = "Sensitive";
  $sug_chl1 = " Grapes";
  $sug_chl2 = " Pomogranate";

} 
elseif ($Chloride > 178 && $Chloride < 355) {
  $result_Chloride = "Moderately Sensitive";
  
} 

elseif ($Chloride > 355 && $Chloride < 710) {
 $result_Chloride = "Moderately Tolorent";
$sug_chl1 = "Tomato";
}

else {
 $result_Chloride = "Moderately Tolorent";
}
// end of chloride

// calcium

if ($calcium < 178) {
  $result_Calcium = "Sensitive";
  $sug_cal1 = " Grapes";
  $sug_cal2 = " Pomogranate";

} 
elseif ($calcium > 178 && $calcium < 355) {
  $result_Calcium = "Moderately Sensitive";
  
} 

elseif ($calcium > 355 && $calcium < 710) {
 $result_Calcium = "Moderately Tolorent";
$sug_cal1 = "Tomato";
}

else {
 $result_Calcium = "Moderately Tolorent";
}
// End of calcium

// zinc

?>
 <!--  -->

<br>
<div class="container">
<table class="table table-bordered table-warning">
  <tr>
    <th>Sl No</th>
    <th>Element</th>
    <th>Result</th>
    <th>Suggested Crop</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Sodium (NA)</td>
    <td><?php echo $result_sodium; ?></td>
    <td>
      <ol>
      <?php 

      if(isset($sug_sod1)){
    echo "<li>". $sug_sod1 . "</li>";
      }
       if(isset($sug_sod2)){
    echo "<li>". $sug_sod2 . "</li>";
      }
      ?>
    </ol>
    </td>
  </tr> 
  <tr>
    <td>2</td>
    <td>Boron </td>
    <td><?php echo $result_boron; ?></td>
    <td>
      <ol>
      <?php 

      if(isset($sug_bor1)){
    echo "<li>". $sug_bor1 . "</li>";
      }
       if(isset($sug_bor2)){
    echo "<li>". $sug_bor2 . "</li>";
      }
      ?>
    </ol>
    </td>
  </tr> 
  <tr>
    <td>3</td>
    <td>Chloride </td>
    <td><?php echo $result_Chloride; ?></td>
    <td>
      <ol>
      <?php 

      if(isset($sug_chl1)){
    echo "<li>". $sug_chl1 . "</li>";
      }
       if(isset($sug_chl2)){
    echo "<li>". $sug_chl2 . "</li>";
      }
      ?>
    </ol>
    </td>
  </tr> 
  <tr>
    <td>4</td>
    <td>Calcium </td>
    <td><?php echo $result_Calcium; ?></td>
    <td>
      <ol>
      <?php 

      if(isset($sug_cal1)){
    echo "<li>". $sug_cal1 . "</li>";
      }
       if(isset($sug_cal2)){
    echo "<li>". $sug_cal2 . "</li>";
      }
      ?>
    </ol>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>Zinc</td>
    <td><?php echo $result_zinc; ?></td>
    <td>
      <ol>
      <?php 

      if(isset($sug_zin1)){
    echo "<li>". $sug_zin1 . "</li>";
      }
       if(isset($sug_zin2)){
    echo "<li>". $sug_zin2 . "</li>";
      }
      ?>
    </ol>
    </td>
  </tr>
</table>
<?php  ?>
</div>
<!-- Trace Element -->
<div class=" bg-white p-md-4">
    <h3 class="text-center">Infiltration</h3><br>
    <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="sodium-tab" data-toggle="tab" href="#sodium" role="tab" aria-controls="home" aria-selected="true">Sodium</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
  <!-- Tab panes -->
 <div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="sodium" role="tabpanel" aria-labelledby="sodium-tab">
    

    <h3>Result: <?php echo $result_sodium; ?></h3>
        <h4>Suggested Crops</h4>
            <?php 
            echo "<ul>";

      if(isset($sug_sod1)){
    echo "<li>". $sug_sod1 . "</li>";
      }
       if(isset($sug_sod2)){
    echo "<li>". $sug_sod2 . "</li>";
      }
      echo "</ul>";
      ?>
  </div>
  <!-- //////////////// -->
 
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  
</div>
<br><br>
<br>
</div>
<?php } ?>
<h4 class="text-center">FIG 4: Form Specific Toxicity Assessent</h4>

<hr>
<div class="bg-white p-3">
  <?php 



// sod
if ($sodium < 144) {
  $result_sod = "Sensitive";
  $EffectSod = "It leads to decreae in the growth of the plant";
 

} 
elseif ($sodium > 144 && $sodium < 458) {
  $result_sod = "Good";
  $EffectSod = " Grapes";
  
} 


else {
 $result_sod = "Tolorent";
  $EffectSod = " It causes damaging of root tissue in Plant";
}
//// chloride
if ($chloride < 178) {
  $result_chlo = "Sensitive";
  $EffectChlo = "Roots shoots groth decrease";
 

} 
elseif ($chloride > 178 && $chloride < 710) {
  $result_chlo = "Good";
  $EffectChlo = " It increases wine quality";
  
} 

else {
 $result_sod = "Tolorent";
  $EffectChlo = " Roots shoots may get damaged";
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
  <h1>Grapes</h1>
    <table class="table table-bordered table-warning">
  <tr>
    <th>Sl No</th>
    <th>Element</th>
    <th>Condition</th>
    <th>Effects</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Sodium (NA)</td>
    <td><?php echo $result_sod; ?></td>
    <td>
      <?php echo $EffectSod ;?>
    </td>
  </tr> 
 
  <tr>
    <td>3</td>
    <td>Chloride </td>
    <td><?php echo $result_chlo ; ?></td>
    <td>
       <?php echo $EffectChlo ;?>
    </td>
  </tr> 
  <tr>
    <td>4</td>
    <td>Calcium </td>
    <td><?php echo $result_Calc ; ?></td>
    <td>
       <?php echo $EffectCalc ;?>
    </td>
  </tr>

</table>
</div>
<!-- pagination -->
    <div class="container p-md-3">
  <nav aria-label="Page navigation example">
     <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="main.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="lab.php">1</a></li>
    <li class="page-item"><a class="page-link" href="irrigation.php">2</a></li>
    <li class="page-item"><a class="page-link" href="toxicity.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="suggest.php" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</section>
</body>
