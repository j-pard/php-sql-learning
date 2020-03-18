<?php
      require 'session.php';
      require 'isadmin.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/basics.css">
      <title>Edition de randonnée</title>
</head>
<body>
      <a href="read.php">Retour</a>

      <?php
                        
            require 'connect.php';

            $values = [
                  $name = $_POST['nameEdited'],
                  $difficulty = $_POST['difficultyEdited'],
                  $distance = $_POST['distanceEdited'],
                  $duration = $_POST['durationEdited'],
                  $height = $_POST['height_differenceEdited'],
                  $isAvailable = $_POST['availableEdited'],
                  $_POST['ID']
            ];

            $sql = ("UPDATE hiking SET 
                        name = ?,
                        difficulty = ?,
                        distance = ?, 
                        duration = ?, 
                        height_difference = ?,
                        available = ?
                        WHERE
                        id = ?
                        ");

            $request = $db->prepare($sql);
            $request->execute($values);

            echo "<p class='success'>La randonnée à été mise à jour.</p>";

            $request->closeCursor();

      ?>
</body>
</html>