<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta. -->

<?php
  function getArrayOfIntergers($min, $max, $items)
  {
    $newArray = [];

    while (count($newArray) < $items) {
      $number = mt_rand($min, $max);

      if (!in_array($number, $newArray)) {
        $newArray[] = $number;
      }
    }
    echo '<ul>';
      for ($i = 0; $i < count($newArray); $i++) {
        echo '<li>'.$newArray[$i].'</li>';
      }
    echo '</ul>';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <style type="text/css">
    </style>
</head>

<body>
  <p>Snack 4</p>
    <p>
      <?php 
         getArrayOfIntergers(1, 15, 15);
      ?>
    </p>

</body>
</html>