<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

<?php

$partite = [
  [
    "partita" => "a",
    "squadra-casa" => "Brindisi",
    "punteggio-casa" => "99",
    "squadra-ospite" => "Treviso",
    "punteggio-ospite" => "95"

  ],
  [
    "partita" => "b",
    "squadra-casa" => "Brescia",
    "punteggio-casa" => "86",
    "squadra-ospite" => "Cremona",
    "punteggio-ospite" => "73"

  ],
  [
    "partita" => "c",
    "squadra-casa" => "Dinamo Sassari",
    "punteggio-casa" => "104",
    "squadra-ospite" => "Varese",
    "punteggio-ospite" => "99"

  ],
  [
    "partita" => "d",
    "squadra-casa" => "VL Pesaro",
    "punteggio-casa" => "69",
    "squadra-ospite" => "Reggiana",
    "punteggio-ospite" => "72"

  ]
  
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <style type="text/css">
    </style>
</head>
<body>
    <?php
      for($i=0; $i<count($partite); $i++){
        echo $partite[$i]["squadra-casa"]." "."-"." ".$partite[$i]["squadra-ospite"]." ". "|"." ".$partite[$i]["punteggio-casa"]."-".$partite[$i]["punteggio-ospite"]."</br>";
      }
    ?>
</body>
</html>
