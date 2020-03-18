<?php
      require '_connect.php';

      $sql = ("DELETE FROM clients where id = ?");
      $request = $db->prepare($sql);

      $id = $_POST['delete'];

      $request->execute([$id]);
      header("Location: ../users.php");

?>