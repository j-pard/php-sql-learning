<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Index</title>
</head>
<body>
      <?php
      $genre = $_GET["genre"];
      $firstname = $_GET["firstname"];
      $lastname = $_GET["lastname"];

            if(isset($genre) && isset($firstname) &&  isset($lastname)) {

                  if(($genre == "female" || $genre == "male") && empty($firstname) == false && empty($lastname) == false)
                        include("presentation.php");
                  }
                  else {
                        include("form.php");
            }
      ?>
</body>
</html>