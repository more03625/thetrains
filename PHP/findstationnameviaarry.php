<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="inarray.php" method="post">
      <input type="text" name="start" placeholder="start" value="">
      <input type="text" name="desti" placeholder="desti" value="">
      <button type="submit" name="button">submit</button>
    </form>
  </body>
</html>

<?php
include("db.php");

$start = strtolower($_POST['start']);
$destination = strtolower($_POST['desti']);

$h = array("mankhurd","govandi","chembur","tilak nagar","kurla");
$c = array("csmt","masjid bunder","sandhurst road","byculla","chinchpokli");
$w = array("churchgate","marine lines","charni road","grant road","mumbai central");
$th = array("thane","airoli","rabale","ghansoli","kopar khairane");


if (in_array("$start", $h) && in_array("$destination",$h))
  {
  echo $start." & ".$destination." found in h";
  }
elseif(in_array("$start", $h) && in_array("$destination",$c))
  {
  echo $start." & ".$destination." found in h & c";
  }
  elseif(in_array("$start", $h) && in_array("$destination",$w))
    {
    echo $start." & ".$destination." found in h & w";
  }elseif(in_array("$start", $h) && in_array("$destination",$th))
        {
        echo $start." & ".$destination." found in h & w";
        }

        // ******
        elseif(in_array("$start", $c) && in_array("$destination",$c))
          {
          echo $start." & ".$destination." found in c & c";
          }
          elseif(in_array("$start", $c) && in_array("$destination",$h))
            {
            echo $start." & ".$destination." found in c & h";
            }
            elseif(in_array("$start", $c) && in_array("$destination",$w))
              {
              echo $start." & ".$destination." found in c & w";
              }
              elseif(in_array("$start", $c) && in_array("$destination",$th))
                {
                echo $start." & ".$destination." found in c & th";
                }

                // *****

                elseif(in_array("$start", $w) && in_array("$destination",$w))
                  {
                  echo $start." & ".$destination." found in w & w";
                  }
                  elseif(in_array("$start", $w) && in_array("$destination",$c))
                    {
                    echo $start." & ".$destination." found in w & c";
                    }
                    elseif(in_array("$start", $w) && in_array("$destination",$h))
                      {
                      echo $start." & ".$destination." found in w & h";
                      }
                      elseif(in_array("$start", $w) && in_array("$destination",$th))
                        {
                        echo $start." & ".$destination." found in w & th";
                        }

                        // *****

                        elseif(in_array("$start", $th) && in_array("$destination",$th))
                          {
                          echo $start." & ".$destination." found in th & th";
                        }elseif(in_array("$start", $th) && in_array("$destination",$c))
                            {
                            echo $start." & ".$destination." found in th & c";
                          }elseif(in_array("$start", $th) && in_array("$destination",$h))
                              {
                              echo $start." & ".$destination." found in th & h";
                            }elseif(in_array("$start", $th) && in_array("$destination",$w))
                                {
                                echo $start." & ".$destination." found in th & w";
                              }else {
                                echo $start." & ".$destination." Nothing found in our databse";
                              }



?>
