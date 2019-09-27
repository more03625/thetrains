<?php include('include/db.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <title>Search Best root Possible</title>
  </head>
  <body>
    <div class="row">


    <h2 style="font-family: 'Pacifico', cursive" align="center">TheTrains.in/indicator</h2>
    <div class="col-sm-10 col-sm offset-1">

    <form class="form-inline" class="" action="featchingDBresultasarry.php" method="post">

    <!-- First DropDown -->
          <select class="form-control mt-2" name="Drop" class="selectpicker" id="selectStart" data-width="100px">
            <?php
              $sqlquery = "SELECT * FROM stations";
              $sqltran = mysqli_query($con, $sqlquery)or die(mysqli_error($con));
              while ($rowList = mysqli_fetch_array($sqltran)) {
                echo "<option value='".$rowList["station_name"]."'>" .$rowList["station_name"]. "</option>";
              }
            ?>
          </select><br><br>
<!-- Another DropDown here -->
          <select class="form-control" name="Drop2" class="selectpicker" id="selectDestination" data-width="100px">
            <?php
              $sqlquery = "SELECT * FROM stations";
              $sqltran = mysqli_query($con, $sqlquery)or die(mysqli_error($con));
              while ($rowList = mysqli_fetch_array($sqltran)) {
                echo "<option value='".$rowList["station_name"]."'>" .$rowList["station_name"]. "</option>";
              }
            ?>
          </select><br><br>
<!-- Submit button here -->
          <button class="btn btn-info" type="sumbit" name="button">Submit</button>
        </form>
</div>

    <?php
    $startPoint =  $_POST["Drop"];
    $endPoint =  $_POST["Drop2"];
    echo "You are at: "."<strong> " . $startPoint . "</strong>"."<br>";
    echo "Destination: "."<strong>".$endPoint."</strong>";
     ?>


</div>
<br>
     <div class="container-fluid bg-info" >

<?php

$value1=mysqli_query($con,"SELECT rank FROM stations WHERE station_name='$startPoint'");
$a = mysqli_fetch_array($value1);
$b=$a[0];

$value2=mysqli_query($con,"SELECT rank FROM stations WHERE station_name='$endPoint'");
$x = mysqli_fetch_array($value2);
$y=$x[0];

$final= mysqli_query($con,"SELECT station_name FROM stations WHERE rank BETWEEN $b AND $y");
$rada= mysqli_query($con,"SELECT station_name FROM stations WHERE rank BETWEEN $y AND $b ORDER BY ID DESC");


while ($res=mysqli_fetch_array($final)) {
  echo "$res[station_name]" .'<br>';
}

while ($resu=mysqli_fetch_array($rada)) {
  echo "$resu[station_name]" .'<br>';
}

 ?>
 </div>


  </body>
</html>
