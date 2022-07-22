<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- ## Snack 3 -->
  <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

  <?php
    $randomNumbersArray = [];

    while(count($randomNumbersArray) < 15) {
      
      // Genero il numero random
      $randomNumber = rand(1 ,100);

      // e lo aggiungiamo all'array solo se non è già presente

      if(!in_array($randomNumber, $randomNumbersArray)) {
        $randomNumbersArray[] = $randomNumber;
      }
    }
  ?>

  <ul>
    <?php for ($i=0; $i < count($randomNumbersArray) ; $i++) { ?>
      
      <li>
        <?php echo $randomNumbersArray[$i] ?>           
      </li>

    <?php } ?>
  </ul>

</body>
</html>