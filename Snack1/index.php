<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- 
    ## Snack 1
    Creiamo un array contenente le partite di basket di 
    un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla
    squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema. 
  -->

  <!-- Olimpia Milano - Cantù | 55-60 -->
  
  <?php 
    //array di partite 
    $matches = [
        [
          'homeTeam' => 'Chicago Bulls',
          'guestTeam' => 'Miami Heat',
          'points' => [122,156]
        ],
        [
          'homeTeam' => 'Los Angeles Lakes',
          'guestTeam' => 'Milwaukee Bucks',
          'points' => [148,132]
        ],
        [
          'homeTeam' => 'Sacramento Kings',
          'guestTeam' => 'Pallacanesto Olimpia Milano',
          'points' => [139,170]
        ]
      ];
  ?>

  <div>
    <?php for ($i=0; $i < count($matches) ; $i++) { ?>
      
      <h2>
        <?php echo $matches[$i]['homeTeam'] .' - ' .$matches[$i]['homeTeam'] ?> | 
        <?php echo $matches[$i]['points'][0] .'-' .$matches[$i]['points'][1] ?>              
      </h2>

    <?php } ?>
  </div>

</body>
</html>