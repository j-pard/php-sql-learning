<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>GET infos</title>
</head>
<body>
      <h2>Who are you ? (GET)</h2>
      <form method="get" action="get_user.php">
            <input type="text" name="firstname" placeholder="Firstname ..." required>
            <input type="text" name="lastname" placeholder="Lastname ..." required>
            <input type="submit" value="Register">
      </form>

      <h2>Who are you ? (POST)</h2>
      <form method="post" action="post_user.php">
            <input type="text" name="firstname" placeholder="Firstname ..." required>
            <input type="text" name="lastname" placeholder="Lastname ..." required>
            <input type="submit" value="Register">
      </form>
</body>
</html>