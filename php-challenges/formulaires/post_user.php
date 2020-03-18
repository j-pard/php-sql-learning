<?php
      if(isset($_POST["firstname"]) && isset($_POST["lastname"])) {
            $firstname = ucfirst($_POST["firstname"]);
            $lastname = ucfirst($_POST["lastname"]);

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
            echo "I know who post it, " . $firstname . " " . $lastname . ".";
      ?>
      </h1>
</body>
</html>