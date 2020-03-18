<?php
      require 'dbid.php';

try {
    $db = new PDO('mysql:host=localhost;dbname=colyseum', $user, $pass);
} catch (PDOException $e) {
    die("Erreur !: " . $e->getMessage() . "<br/>");
}

?>
