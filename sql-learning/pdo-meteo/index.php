<?php

      function showData() {
            require 'sqlconnect.php'; //Connection à la DB

            $sql = ('SELECT * FROM meteo_juin');
            $requete = $db->query($sql);
      
            echo "<table>";
            echo "<tr>
                  <th>Ville</th>
                  <th>Min</th>
                  <th>Max</th>";
      
            while($datas = $requete->fetch()) { //Boucle tant que $requete renvoit quelque chose
                  echo "<tr>" . 
                  "<td>" . $datas['ville'] . "</td>" .
                  "<td>" . $datas['min'] . "</td>" .
                  "<td>" . $datas['max'] . "</td>" . 
                  "</tr>";
            }
      
            echo "</table>";
            $requete->closeCursor();
      }

      showData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Weather Resume</title>
</head>
<body>
      <form action="inserted.php" method="POST">
            <label for="city">Ville : </label><input type="text" name="city" id="city-in">
            <label for="min">Température minimum moyenne : </label><input class="number" step="0.1" type="number" name="minT" id="min-in">
            <label for="max">Température maximum moyenne : </label><input class="number" step="0.1" type="number" name="maxT" id="max-in">
            <button type="submit" name="submit">Ajouter</button>
      </form>
</body>
</html>