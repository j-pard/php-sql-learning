<?php
      if(!$_SESSION['isAdmin']) {
		header("Location: noaccess.php");
      }
?>