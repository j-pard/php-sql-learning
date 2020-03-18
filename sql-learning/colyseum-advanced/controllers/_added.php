<?php

      require '_connect.php';

      if(isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['birthdate'])) {

            $newUser = [];

            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $birthdate = strval($_POST['birthdate']);

            if(isset($_POST['hasCard'])) {
                  $hasCard = 1;
                  $cardNumber = intval($_POST['cardNumber']);
            }
            else {
                  $hasCard = 0;
                  $cardNumber = null;
            }

            if(!empty($lastname) && !empty($firstname) && !empty($birthdate)) {
      
                  if($hasCard) {
                        $newUser = [
                              $lastname,
                              $firstname,
                              $birthdate,
                              $hasCard,
                              $cardNumber
                        ];

                        $sql = ("   INSERT INTO clients
                                    (lastName, firstName, birthDate, card, cardNumber)
                                    VALUES
                                    (?, ?, ?, ?, ?)
                              ");
                  }

                  else {
                        $newUser = [
                              $lastname,
                              $firstname,
                              $birthdate,
                              $hasCard
                        ];
                        $sql = ("   INSERT INTO clients
                                    (lastName, firstName, birthDate, card)
                                    VALUES
                                    (?, ?, ?, ?)
                              ");
                  }

                  $request = $db->prepare($sql);
                  $request->execute($newUser);

                  echo "<p class='success'>Nouveau client enregistré avec succès.</p>";
            }
            else {
                  echo "<p class='warning'>Erreur, tous les champs doivent être remplis.</p>";
            }

            echo "<a href='../users.php'>Retour</a>";
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../assets/style.css">
      <title>Ajout de client</title>
</head>
<body>
      
</body>
</html>