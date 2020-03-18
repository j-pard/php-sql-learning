<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
<form method="get">
            <input type="text" name="input" placeholder="Input">
            <input type="submit" value="Submit">
      </form>

      <?php
            function line(){
                  echo "<br>--------------<br>";
            }

            $input = $_GET["input"];
            if (isset($input)) {
                  echo (ucfirst($input));
                  line();
            }
            $date = getdate();
            echo ("Current year : ");
            echo $date[year];
            line();
            echo ("Current time : " . $date[hours] . ":" . $date[minutes] . ":" . $date[seconds]);
            line();
            echo date('H:i');
            line();
      ?>

      <form method="post">
            <input type="text" name="num1" placeholder="Enter a number ...">
            <input type="text" name="num2" placeholder="Enter a number ...">
            <input type="submit" value="=">

            <?php
            function sum($arg1, $arg2) {
                  $sum = $arg1 + $arg2;
                  return $sum;
            }
                  $num1 = $_POST['num1'];
                  $num2 = $_POST['num2'];

                  if(isset($num1) AND isset($num2)) {
                        if(is_numeric($num1) AND is_numeric($num2)) {
                              echo sum($num1, $num2);
                        }
                        else {
                              echo "Enter only numeric values";
                        }
                  }
                  line();
            ?>
      </form>

      <form method="post">
      <input type="text" name="str" placeholder="String to Acronym ...">
      <input type="submit" value="Enjoy the magic">

      <?php
            $str = $_POST["str"];
            $acronym = [];
            if(isset($str)) {
                  $words = explode(" ", $str);
                  foreach ($words as $word) {
                        $word = ucfirst($word);
                        $arr = str_split($word);
                        $acronym[] = $arr[0];
                  }
                  echo implode($acronym);
            }
            line();
      ?>
      </form>

      <form method="post">
            <input type="text" name="replace" placeholder="ae to æ">
            <input type="submit" value="Transform">
            
            <?php
                  $str = $_POST["replace"];
                  if(isset($str)) {
                        echo str_replace("ae", "æ", $str);
                  }
                  line();
            ?>
      </form>

      <form method="post">
            <input type="text" name="replace" placeholder="æ to ae">
            <input type="submit" value="Transform">
            
            <?php
                  $str = $_POST["replace"];
                  if(isset($str)) {
                        echo str_replace("æ", "ae", $str);
                  }
                  line();
            ?>
      </form>
      

      <?php
            function feedback($message, $class = "info") {
                  $str = "<div class='" . $class . "'>" . ucfirst($class) . ": " . $message . ".</div>";
                  return htmlentities($str);
            }

            echo feedback("Incorrect email address", "warning");
            line();
      ?>


      <h3>Generated Words :</h3>

      <form method="post">
      <?php
            function generateWord($nLetter) {
                  $wordArr = [];
                  for($i = 0; $i < $nLetter; $i++) {
                        $wordArr[] = chr(rand(97,122)); //Generate random minus letter and push it
                  }
                  $word = implode("", $wordArr);
                  return $word;
            }

            if (isset($_POST['generate'])) {
                  echo generateWord(rand(1, 5));
                  echo "<br>";
                  echo generateWord(rand(7, 15));
                  echo "<br>";
            }
      ?>
            <input type="submit" name="generate" value="Generate words">
      </form>
      <?php line() ?>

      <?php
            echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
            line();

            //cone
            function cone($ray, $heigth) {
                  $volume = $ray * $heigth * 3.14 * 2 * (1/3);
                  echo "The volume of a cone which ray is " . $ray . " and height is " . $heigth . " = " . $volume . ' cm<sup>3</sup><br />';
            }

            cone(5, 5);
            cone(3,4);
      ?>

</body>
</html>