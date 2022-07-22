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
  <!-- ## Snack 5 -->
  <!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

  <?php

    // Array
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<div>
  <h2>Teachers</h2>
  <?php for ($i=0; $i < count($db["teachers"]) ; $i++) { ?>
      
    <h3 class="grey" >
      <?php echo $db["teachers"][$i]['name'] .' ' .$db["teachers"][$i]['lastname'] ?>           
    </h3>

  <?php } ?>
</div>

<div>
  <h2>PM</h2>
  <?php for ($i=0; $i < count($db["pm"]) ; $i++) { ?>
      
      <h3 class="green" >
        <?php echo $db["pm"][$i]['name'] .' ' .$db["pm"][$i]['lastname'] ?>           
      </h3>
  
    <?php } ?>
</div>

</body>
</html>