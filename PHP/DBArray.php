<?php

 include('include/db.php');

$a =  $_POST["Drop"];
$b =  $_POST["Drop2"];
echo "You are at: "."<strong> " . $a . "</strong>"."<br>";
echo "Destination: "."<strong>".$b."</strong>";

  // $datas = array();
  //
  // if(mysqli_num_rows($result) > 0){
  //   while($row = mysqli_fetch_assoc($result)) {
  //     $datas[] = $row;
  //   }
  // }
  //
  // foreach ($datas as $data) {
  //   $finalarray =  $data['station_name'];
  //    // echo $finalarray;
  // }


?>
