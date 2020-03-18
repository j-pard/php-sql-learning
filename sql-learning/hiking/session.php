<?php

      session_start();

      if(isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_SESSION['isAdmin'])) {
            echo "<div class='auth'>";
            echo "<p>" . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "</p>";
            if($_SESSION['isAdmin']) {
                  echo "<p class:'success'>-Admin-</p>";
            }
            echo "<ul>";
            echo "<li><a href='member.php'>Zone membre</a></li>";
            echo "<li><a href='disconnect.php'>Se déconnecter</a></li>";
            echo "</ul>";
            echo "</div>";
      }
      else {
            session_unset();
            session_destroy();
            header("Location: index.php");
      }
?>