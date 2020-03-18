<?php
      require 'connect.php';

      $sql = ("SELECT * FROM users WHERE login = ?");
      $checkUser = $db->prepare($sql);
 
      $logIsValid = false; 

      //Check if inputs variables are declared
      if(isset($_POST['login']) && isset($_POST['pwd'])) {
            //Variables OK => Check connection
            $login = ($_POST['login']);
            $pwd = sha1($_POST['pwd']);

            $checkUser->execute([$login]);
            $identifiers = $checkUser->fetch();

            $valideLogin = $identifiers[1];
            $validePwd = $identifiers[2];
            $firstname = $identifiers[3];
            $lastname = $identifiers[4]; 

            if($valideLogin == $login && $validePwd == $pwd) { // This is the right way !
                  echo "<p class='success'>Bienvenue " . $firstname . " " . $lastname . "</p>";
                  $logIsValid = true;
                  session_start();

                  //Session variables
                  $_SESSION['login'] = $login;
                  $_SESSION['pwd'] = $pwd;
                  $_SESSION['firstname'] = $firstname;
                  $_SESSION['lastname'] = $lastname;
                  $_SESSION['isAdmin'] = $identifiers[5];
                  // Redirection
                  header("Location: member.php");
            }
            else if ($valideLogin == $login && $validePwd != $pwd) {
                  echo "<p class='warning'>Mot de passe invalide. </p>";
            }
            else if ($valideLogin != $login) {
                  echo "<p class='warning'>Utilisateur inconnu.</p>";
            }
            else {
                  echo "<p class='warning'>Erreur d'authenfication, veuillez réessayer.</p>";
            }
      }
      else {
            echo "<p class='warning'>Identifiants non enregistrés.</p>";
      }

      // If error, staying in this page to show the error and create a link to go back
      echo "<a href='index.php'>Retour à l'écran de connection</a>";



?>
<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/basics.css">
      <title>Login</title>
</head>
<body>
      
</body>
</html>