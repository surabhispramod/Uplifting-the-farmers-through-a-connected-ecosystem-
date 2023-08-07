<?php
$sql ="SELECT count(id) As total FROM farmers ";
      $result=mysqli_query($db,$sql);
      $values=mysqli_fetch_assoc($result);
      $sammac=$values['total'];
$sql1 ="SELECT count(id) As total1 FROM agri_tips  ";
      $result1=mysqli_query($db,$sql1);
      $values1=mysqli_fetch_assoc($result1);
      $sammac1=$values1['total1'];

$sql2 ="SELECT count(id) As total2 FROM forecasting  ";
      $result2=mysqli_query($db,$sql2);
      $values2=mysqli_fetch_assoc($result2);
      $sammac2=$values2['total2'];
// $sql3 ="SELECT count(id) As total3 FROM users  ";
//       $result3=mysqli_query($db,$sql3);
//       $values3=mysqli_fetch_assoc($result3);
//       $sammac3=$values3['total3'];

?>