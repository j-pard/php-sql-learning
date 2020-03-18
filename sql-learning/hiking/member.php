<?php
      require 'session.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/basics.css">
      <title>Zone membre</title>
</head>
<body>
      <h1>Espace membre</h1>
      <nav>
            <ul>
                  <li><a href="read.php">Trouver une randonnées</a></li>

                  <?php
                        if($_SESSION['isAdmin']) {
                              echo "<li><a href='create.php'>Créer une randonnée</a></li>";
                        }
                  ?>
            </ul>
      </nav>
</body>
</html>