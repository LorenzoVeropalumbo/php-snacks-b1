<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- ## Snack 2 -->
  <!-- Passare come parametri GET name, mail e age e verificare 
  (cercando i metodi che non conosciamo nella documentazione) che 
  name sia più lungo di 3 caratteri, che mail contenga un punto e 
  una chiocciola e che age sia un numero. Se tutto è ok stampare 
  “Accesso riuscito”, altrimenti “Accesso negato” -->

  <?php 
    //mi salvo gli input dell'utente 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    $userMessage = '';

    // controllo che tutti gli input siamo corretti
    if(strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
      
      if(strlen($name) > 3){
        
        if(is_numeric($age)){
          
          $userMessage = 'Accesso riuscito';
        
        } else {

          $userMessage = 'Accesso negato';
        }
      } else {
        $userMessage = 'Accesso negato';
      }
    } else {
      $userMessage = 'Accesso negato';
    }
  ?>

  <!-- stampo in pagina -->
  <h1><?php echo $userMessage; ?></h1>
  

</body>
</html>