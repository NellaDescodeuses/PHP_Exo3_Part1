<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_3 Part_1</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 3 Partie 1</h1>
    <h2>
      Créez une variable age. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge.
    </h2>
    <?php
    function major(){
      $age = 13;

      if($age >= 18){
        echo "vous êtes majeur.";
      }else{
        echo "vous êtes mineur";
      }
    }
   ?>
   <p><?= major() ?></p>
  </div>
</html>