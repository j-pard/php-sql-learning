<?php
  require 'session.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
      <tr>
        <th>Nom</th>
        <th>Difficulté</th>
        <th>Distance</th>
        <th>Durée</th>
        <th>Dénivelé</th>
        <th>Accessible</th>
      </tr>
      <?php
        require 'connect.php';

        $sql = ("SELECT * FROM hiking");
        $requete = $db->query($sql);

        while($datas = $requete->fetch()) {
          echo "<tr>";
            echo "<td>" . $datas[1] . "</td>";
            echo "<td>" . $datas[2] . "</td>";
            echo "<td>" . $datas[3] . "</td>";
            echo "<td>" . $datas[4] . "</td>";
            echo "<td>" . $datas[5] . "</td>";
            if($datas[6] == 1) {
              $isAvailable = "Oui";
              echo "<td>" . $isAvailable . "</td>";
            }
            else {
              $isAvailable = "Non";
              echo "<td>" . $isAvailable . "</td>";
            }       
            if($_SESSION['isAdmin']) {
              echo "<td> <form action='update.php' method='GET'>";
                echo "<button class='btn-edit' type='submit' name='edit' value='" . $datas[0] . "'>Edit</button>";
              echo "</form> </td>";
              echo "<td> <form action='delete.php' method='POST'>";
                echo "<button class='btn-delete' type='submit' name='delete' value='" . $datas[0] . "'>X</button>";
              echo "</form> </td>";
            }   
    
          echo "</tr>";
        }

        $requete->closeCursor();

      ?>
    </table>

    <?php
      if($_SESSION['isAdmin']) {
        echo "<a href='create.php'>Ajouter une randonnée</a>";
      }
    ?>
  </body>
</html>
