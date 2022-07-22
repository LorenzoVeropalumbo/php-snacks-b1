<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- ## Snack 4 -->
  <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

  <?php
    //Creo il paragrafo 
    $paragraph = 'Al contrario di quanto si pensi, Lorem Ipsum non è semplicemente una sequenza casuale di caratteri. Risale ad un classico della letteratura latina del 45 AC, cosa che lo rende vecchio di 2000 anni. Richard McClintock, professore di latino al Hampden-Sydney College in Virginia, ha ricercato una delle più oscure parole latine, consectetur, da un passaggio del Lorem Ipsum e ha scoperto tra i vari testi in cui è citata, la fonte da cui è tratto il testo, le sezioni 1.10.32 and 1.10.33 del "de Finibus Bonorum et Malorum" di Cicerone. Questo testo è un trattato su teorie di etica, molto popolare nel Rinascimento. La prima riga del Lorem Ipsum, "Lorem ipsum dolor sit amet..", è tratta da un passaggio della sezione 1.10.32.';
    //Lo divido in strighe ogni volta che ho il .
    $paragraphExplode = explode(".",$paragraph);
  ?>

  <ul>
    <?php for ($i=0; $i < count($paragraphExplode) ; $i++) { ?>

      <!-- controllo se la stringa sia maggiore di 0 -->
      <?php if(strlen($paragraphExplode[$i]) > 0){ ?>
        
        <li>  
          <b><?php echo $paragraphExplode[$i] ?></b>               
        </li>

      <?php }  ?> 
    <?php } ?>
  </ul>

</body>
</html>