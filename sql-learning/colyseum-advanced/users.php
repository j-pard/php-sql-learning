<?php
      require 'controllers/_connect.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/style.css">
      <title>Membres</title>
</head>
<body>
      <?php include 'views/_nav.php' ?>

      <h1>Gestion des clients</h1>
      
      <form id="addClient" action="controllers/_added.php" method="POST">
            <div class="formDiv">
                  <label for="lastname">Nom</label>
                  <input type="text" name="lastname" value="">
            </div>

            <div class="formDiv">
                  <label for="firstname">Prénom</label>
                  <input type="text" name="firstname" value="">
            </div>

            <div class="formDiv">
                  <label for="birthdate">Date de naissance</label>
                  <input type="date" name="birthdate" value="">
            </div>

            <div class="formDiv">
                  <label for="hasCard">Possède une carte ? </label>
                  <input type="checkbox" name="hasCard" id="">
            </div>

            <div class="formDiv">
                  <label for="cardNumber">Numéro de carte</label>
                  <input type="number" name="cardNumber" value="">
            </div>

            <div class="formDiv">
                  <input type="submit" value="Ajouter">
            </div>
      </form>
</body>
</html>