<?php
      require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Colyseum</title>
</head>
<body>
      <h2>Liste des clients</h2>
      <?php
            $sql = ("SELECT * FROM clients ORDER BY lastname ASC");

            $request = $db->query($sql);

            while($client = $request->fetch()) {
                  echo "<ul class='member'>";
                        echo "<li>" . "<span class='label'>Nom:</span>" . $client[1] . "</li>";
                        echo "<li>" . "<span class='label'>Prénom:</span>" . $client[2] . "</li>";
                        echo "<li>" . "<span class='label'>Date de naissance:</span>" . $client[3] . "</li>";
                        echo "<li>" . "<span class='label'>Carte de fidélité:</span>";
                              if($client[4]) {
                                    echo "Oui</li>";
                                    echo "<li>" . "<span class='label'>Numéro de carte:</span>" . $client[5] . "</li>";
                              }
                              else {
                                    echo "Non</li>";
                              }
                  echo "</ul>";
            }

            $request->closeCursor();
      ?>
      
      <h2>Type de spectacles</h2>

      <?php
            $sql = ("SELECT * FROM showTypes");

            $request = $db->query($sql);

            while($showType = $request->fetch()) {
                  echo "<p>" . $showType[1] . "</p>";
            }

            $request->closeCursor();
      ?>

      <h2>Uniquement les M !</h2>
      
      <?php
            $sql = ("SELECT * FROM clients WHERE lastname LIKE 'M%' ORDER BY lastname ASC");
            $request = $db->query($sql);

            while( $clientM = $request->fetch()) {
                  echo "<ul>";
                        echo "<li>Nom: " . $clientM[1] . "</li>";
                        echo "<li>Prénom: " . $clientM[2] . "</li>";
                  echo "</ul>";
            }
            $request->closeCursor();
      ?>

      <h2>Agenda</h2>

      <?php
            $sql = ("SELECT * FROM shows ORDER BY title ASC");
            $request = $db->query($sql);

            echo "<ul>";
            while($show = $request->fetch()) {
                  echo "<li>" . $show['title'] . " par " 
                              . $show['performer']
                              . ", sera visible le "
                              . $show['date']
                              . " à "
                              . $show['startTime'] 
                              . "</li>";
            }
            echo "</ul>";
      ?>
</body>
</html>