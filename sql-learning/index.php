<?php
      require 'sqlconnect.php'; //Connection à la DB

      $sql = ('SELECT * FROM jeux_video');
      $requete = $db->query($sql);

      while($datas = $requete->fetch()) { //Boucle tant que $requete renvoit quelque chose
            echo "<p>" . $datas['console'] . " - " . $datas['nom'] . "</p>";
      }
      $requete->closeCursor();
?>