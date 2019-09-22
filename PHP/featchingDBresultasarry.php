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
    <!-- <h2 style="font-family: 'Pacifico', cursive" align="center">TheTrains.in/indicator</h2> -->
    <div class="col-sm-10 col-sm offset-1">

    <form class="form-inline" class="" action="featchingDBresultasarry.php" method="post">

    <!-- First DropDown -->
          <select class="form-control mt-2" name="Drop" class="selectpicker" id="selectStart" data-width="100px">
            <?php
              $sqlquery = "SELECT * FROM stations";
              $sqltran = mysqli_query($conn, $sqlquery)or die(mysqli_error($conn));
              while ($rowList = mysqli_fetch_array($sqltran)) {
                echo "<option value='".$rowList["station_name"]."'>" .$rowList["station_name"]. "</option>";
              }
            ?>
          </select><br><br>
<!-- Another DropDown here -->
          <select class="form-control" name="Drop2" class="selectpicker" id="selectDestination" data-width="100px">
            <?php
              $sqlquery = "SELECT * FROM stations";
              $sqltran = mysqli_query($conn, $sqlquery)or die(mysqli_error($conn));
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




  </body>
</html>
