<?php
      $submit = $_POST['submit'];
      if(isset($submit)) {

            $city = $_POST['city'];
            $min = $_POST['minT'];
            $max = $_POST['maxT'];

            if($city != "" && $min != "" && $max != "") {
                  require 'sqlconnect.php'; //Connection à la DB

                  $query = ("INSERT INTO meteo_juin (ville, min, max) VALUES (?, ?, ?)");
                  $stmt = $db->prepare($query);
                  $stmt->execute([$city, $min, $max]);

                  echo "<p class='success'> Valeurs ajoutées avec succès. </p>"; 
            }
            else {
                  echo "<p class='error'> Les champs doivent être TOUS remplis. </p>";
            }

      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Document</title>
</head>
<body>

      <form action="index.php">
            <button type="submit">Back</button>
      </form>
      
</body>
</html>