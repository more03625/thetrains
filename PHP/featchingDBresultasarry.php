<?php include('include/db.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="DBArray.php" method="post">

    <!-- Time period selection -->
        <div class="col-lg-5 col-md-6 col-sm-6 prod-filter" align="right">
          <select name="Drop" class="selectpicker" id="selectyear" data-width="100px">
            <?php
              $sqlquery = "SELECT * FROM stations";
              $sqltran = mysqli_query($conn, $sqlquery)or die(mysqli_error($conn));
              while ($rowList = mysqli_fetch_array($sqltran)) {
                echo "<option value='".$rowList["station_name"]."'>" .$rowList["station_name"]. "</option>";
              }
            ?>
          </select>

          <select name="Drop2" class="selectpicker" id="selectyear" data-width="100px">
            <?php
              $sqlquery = "SELECT * FROM stations";
              $sqltran = mysqli_query($conn, $sqlquery)or die(mysqli_error($conn));
              while ($rowList = mysqli_fetch_array($sqltran)) {
                echo "<option value='".$rowList["station_name"]."'>" .$rowList["station_name"]. "</option>";
              }
            ?>
          </select>
          <button type="sumbit" name="button">Submit</button>
        </form>
		</div>
    <?php

     ?>
  </body>
</html>
