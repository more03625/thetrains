<!-- inserttraindetails.php html file -->
<?php
include ("include/db.php");
// if ($con->connect_error) {
//         die("Connection failed: " . $con->connect_error);
//     }else {
//       echo "connection successful";
//     }
// if (isset($_REQUEST['insert'])) {
    $start = mysqli_real_escape_string($con, $_POST['start']);
    $destination = mysqli_real_escape_string($con, $_POST['destination']);

    $start_time = mysqli_real_escape_string($con, $_POST['start_time']);
    $a = strtotime($start_time);
    date('h:i:s', $a);

    $destination_time = mysqli_real_escape_string($con, $_POST['destination_time']);
    $b = strtotime($destination_time);
    date('h:i:s', $b);

    $line = $_POST['line'];
    $on_sunday = $_POST['on_sunday'];
    // echo $line;
    // echo $on_sunday;
    //got all the values from above queris.

    $sel_all = "SELECT * FROM trains where start='$start' AND destination='$destination' AND start_time='$start_time' AND destination_time='$destination_time'";
    $run_sel_all = mysqli_query($con,$sel_all);
    if($run_sel_all){
    $num_rec = mysqli_num_rows($run_sel_all);
    }
    if($num_rec>0){
     echo "<script>alert('this station name is already exist in database')</script>";
     echo "<script>document.open('insert_train.php')</script>";
    }else{			//****************code for inserting station data in database *******************
    //WORKING FINE
    if($line=="h"){
    $insert = "INSERT INTO trains(id,start,destination,start_time,destination_time,h,on_sunday) values (id,'$start','$destination','$start_time','$destination_time',1,'$on_sunday')";
    $run_insert = mysqli_query($con,$insert);
    if($run_insert){
    echo "<script>alert('data inserted into stations table') </script>";
    }
    else{
    echo "<script>alert('data not inserted inserted') </script>";
    }
    }elseif($line=="c"){
      $insert = "INSERT INTO trains(id,start,destination,start_time,destination_time,c,on_sunday) values (id,'$start','$destination','$start_time','$destination_time',1,'$on_sunday')";

    $run_insert = mysqli_query($con,$insert);
    if($run_insert){
    echo "<script>alert('data inserted into stations table') </script>";
    }
    else{
    echo "<script>alert('data not inserted inserted') </script>";
    }
    }elseif($line=="w"){
      $insert = "INSERT INTO trains(id,start,destination,start_time,destination_time,w,on_sunday) values (id,'$start','$destination','$start_time','$destination_time',1,'$on_sunday')";

    $run_insert = mysqli_query($con,$insert);
    if($run_insert){
    echo "<script>alert('data inserted into stations table') </script>";
    //WORKING FINE
    }
    else{
    echo "<script>alert('data not inserted inserted') </script>";
    }
    }elseif($line=="th"){
      $insert = "INSERT INTO trains(id,start,destination,start_time,destination_time,th,on_sunday) values (id,'$start','$destination','$start_time','$destination_time',1,'$on_sunday')";

    $run_insert = mysqli_query($con,$insert);
    if($run_insert){
    echo "<script>alert('data inserted into stations table') </script>";
    }
    else{
    echo "<script>alert('data not inserted inserted') </script>";
    }
    }
    }
  // mysqli_close($con);

?>
