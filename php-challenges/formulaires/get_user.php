<?php
      if(isset($_GET["firstname"]) && isset($_GET["lastname"])) {
            $firstname = ucfirst($_GET["firstname"]);
            $lastname = ucfirst($_GET["lastname"]);

      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Get User</title>
</head>
<body>
      <h1>
      <?php
            echo "I know who get this, " . $firstname . " " . $lastname . ".";
      ?>
      </h1>
</body>
</html>