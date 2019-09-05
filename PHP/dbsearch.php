<?php
include('db/dbconn.php');

$a = $_POST['stationname'];
$b = $_POST['Destination'];
$p = $a.$b;
// echo $p;
$query = "SELECT * FROM stations WHERE stationname='$a'";
$query2 = "SELECT * FROM stations2 WHERE stationname2='$b'";

$result =mysqli_query($conn,$query);
$result2 =mysqli_query($conn,$query2);

$list = mysqli_fetch_assoc($result);
$list2 = mysqli_fetch_assoc($result2);

$c=$list['stationname'];
$d=$list2['stationname2'];
// echo $c;
$query4 = "SELECT * FROM makhurdkurla";
// $query3 = "SELECT * FROM makhurdkurla";



$result4 =mysqli_query($conn,$query4);
// $result3 =mysqli_query($conn,$query3);

$list4 = mysqli_fetch_assoc($result4);
// $list3 = mysqli_fetch_assoc($result3);
// echo $result4;

$m=$list4['id'];
$n=$list4['time'];
// echo $n;
// echo $m;

echo $c." to ".$d." train".$n;

// $name= " $c$d";
// echo $name;


?>
