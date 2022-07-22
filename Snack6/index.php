<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .grey {
      border: 5px solid gray;
      padding: 10px;
      display: inline-block;
      font-size: 25px;
      margin: 0;
    }
    .green {
      border: 5px solid green;
      padding: 10px;
      display: inline-block;
      font-size: 25px;
      margin: 0;
    }

    h2{
      font-size: 30px;
    }
  </style>
</head>
<body>
  <!-- ## Snack 6 -->
  <!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

  <?php

  // Array
  $students = [
    [
      "name" => "Davide",
      "lastName" => "Pisani",
      "vote" => [8,4,6,9,8],
    ],
    [
      "name" => "Vincenzo",
      "lastName" => "Tardino",
      "vote" => [9,6,5,3,7],
    ],
    [
      "name" => "Loris",
      "lastName" => "Palazzo",
      "vote" => [6,5,9,4],
    ],
    [
      "name" => "Edmondo",
      "lastName" => "Lopez",
      "vote" => [9,10,8,7],
    ],
  ];
?>

<div>
  <?php for ($i=0; $i < count($students) ; $i++) { ?>
      
    <h2>
      <?php echo $students[$i]['name'] .' ' .$students[$i]['lastName'] .' ' .addNumbers($students[$i]['vote']) ?>            
    </h2>

  <?php } ?>
</div>

<?php
  function addNumbers($vote) {    

    for ($i=0; $i < count($vote); $i++) { 
      $average += $vote[$i];
    }

    return $average/count($vote);
  }
?>
</body>
</html>