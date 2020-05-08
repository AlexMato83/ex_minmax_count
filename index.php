<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $min = $_GET["min"];
    $max = $_GET["max"];
    $count = $_GET["count"];
     echo "stampa numeri: ";
     echo "<br>---------<br>";
     $sum = 0;
    for ($i=0; $i < $count; $i++){
      $numRand = rand($min, $max);
       echo rand($min, $max) . " ";
      $sum += $numRand;
    }
    $media = $sum / $count;
    echo "<br>---------<br>";
    echo "totale: " . $sum;
    echo "<br>---------<br>";
    echo "media numeri: " . $media;
     ?>
  </body>
</html>
