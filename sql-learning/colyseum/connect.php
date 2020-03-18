<?php
      $user = "john";
      $pass = "EP1-2005";

try {
    $db = new PDO('mysql:host=localhost;dbname=colyseum', $user, $pass);
} catch (PDOException $e) {
    die("Erreur !: " . $e->getMessage() . "<br/>");
}

?>
