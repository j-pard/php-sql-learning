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

      <section id="createClient" class="adminSection">
            <h2>Création d'un nouveau client</h2>
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
      </section>

      <section id="viewClients" class="adminSection">
            <h2>Liste des clients</h2>

            <table id='clientsList'>
                  <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Carte de fidélité</th>
                        <th>Numéro de carte</th>
                        <th>Actions</th>
                  <tr>


                  <?php

                        $sql = ("SELECT * FROM clients");
                        $request = $db->query($sql);

                        while($client = $request->fetch()) {
                              echo "<tr>";
                                    echo "<td>";
                                          echo $client[1];
                                    echo "</td>";
                                    echo "<td>";
                                          echo $client[2];
                                    echo "</td>";
                                    echo "<td class='center'>";
                                          echo $client[3];
                                    echo "</td>";
                                    echo "<td class='center'>";
                                          echo $client[4];
                                    echo "</td>";
                                    echo "<td class='center'>";
                                    if($client[5]) {
                                          echo $client[5];
                                    }   
                                    echo "</td>";
                                    echo "<td class='center'>";
                                          echo "<form action='edit.php' method='POST' class='inline'>
                                                      <button class='edit' type='submit' name='edit' value='" . $client[0] . "'>Edit</button>
                                                </form>";
                                          echo "<form action='controllers/_delete.php' method='POST' class='inline'>
                                                      <button class='delete' type='submit' name='delete' value='" . $client[0] . "'>X</button>
                                                </form>";
                                    echo "</td>";
                              echo "</tr>";
                        }
                        $request->closeCursor();

                  ?>
            </table>
      </section>
      
      <script src="./assets/script.js"></script>
</body>
</html>