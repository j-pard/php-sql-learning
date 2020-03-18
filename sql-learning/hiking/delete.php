<?php

      require 'session.php';
      require 'isadmin.php';

      /**** Supprimer une randonnée ****/

      header("Location: read.php");

      $id = $_POST['delete'];

      require 'connect.php';

      $sql = ("DELETE FROM hiking WHERE id = ?");
      $request = $db->prepare($sql);
      $request->execute([$id]);

      $request->closeCursor();
?>
