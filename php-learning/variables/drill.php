<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Drill</title>
</head>
<body>
      <?php 
      $possible_states = [
            "Disgusting",
            "Dirty",
            "Clean"
      ];
      $room_state = $possible_states[1];

      if($room_state == $possible_states[0]) {
            echo "OMG, it's horrible ! Clean this sh*it now !";
      }
      else if($room_state == $possible_states[1]) {
            echo "This room is dirty, call the girl !";
      }
      else {
            echo "Nothing to do here.";
      }
      echo "<br>--------------<br>";      
      ?>

      <?php
            $time = [
                  13,
                  0
            ];
            $hour = $time[0];
            $min = $time[1];

            if ($hour >= 5 AND $hour <= 12) {
                  echo "Good morning !";
            }
            else if ($hour > 12 AND $hour <= 17) {
                  echo "Good afternoon !";
            }
            else if ($hour > 17 AND $hour < 22) {
                  echo "Good evening !";
            }
            else if (($hour >= 22 AND $hour <= 24) OR ($hour >= 0 AND $hour < 5)) {
                  echo "Good night !";
            }
            else {
                  echo "Not a valid time !";
            }
            echo "<br>--------------<br>"; 
      ?>

      <form method="get">
            <label for="age">How old are u ?</label>
            <input type="number" name="age">
            <input type="submit" name="submit" value="Greet me now">
      </form>

      <?php
            if (isset($_GET['age'])) {
                  $age = $_GET['age'];

                  if ($age < 0) {
                        echo "You are not born yet";
                  }
                  else if($age >= 0 AND $age < 12) {
                        echo "Hello Kid !";
                  }
                  else if ($age >= 12 AND $age < 18) {
                        echo "Hello Teenager !";
                  }
                  else if ($age >= 18 AND $age <= 115) {
                        echo "Hello Adult !";
                  }
                  else if ($age > 115) {
                        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
                  }
                  else {
                        echo "Dude, it's not your age !";
                  }
            }
            echo "<br>--------------<br>"; 
      ?>

      <form action="" method="get">
            <label for="age">How old are you ?</label>
            <input type="number" name="age">
            <label for="gender">Gender ?</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
            <input type="submit" value="Register">
      </form>
      <?php 

            if(isset($_GET['age']) AND isset($_GET['gender'])) {
                  $age = $_GET['age'];
                  $gender = $_GET['gender'];

                  if(($age >= 21 AND $age <= 40) AND ($gender == "female")) {
                        echo "Welcome to the team !";
                  }
                  else {
                        echo "Sorry, you don't fit the criteria";
                  }
                  echo "<br>--------------<br>";
            }
      ?>
</body>
</html>