<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>R U an unicorn ?</title>
</head>
<body>

      <h2>What kind of animal are you ?</h2>
      <form method="post">
            <input type="radio" name="race" value="human" id="human">
            <label for="human">Human</label>
            <input type="radio" name="race" value="cat" id="cat">
            <label for="cat">Cat</label>
            <input type="radio" name="race" value="unicorn" id="unicorn">
            <label for="unicorn">Unicorn</label>
            <br>
            <input type="submit" value="Check">
      </form>
      <?php
            $race = $_POST["race"];
            $gif = NULL;
            if(isset($race)) {
                  if ($race == "human") {
                        $gif = "https://media0.giphy.com/media/l0HlSNOxJB956qwfK/giphy.gif?cid=790b76114395001d48911f9f0543a19a5848b875bd863bbd&rid=giphy.gif";
                  }
                  else if ($race == "cat"){
                        $gif = "https://media.giphy.com/media/mlvseq9yvZhba/giphy.gif";
                  }
                  else if($race == "unicorn") {
                        $gif = "https://media0.giphy.com/media/mjo3HtlPnEuNq/giphy.gif?cid=790b761168cdf1c1b0ae63eb1d8fa8e33d21746185e2f999&rid=giphy.gif";
                  }
                  
                  echo "<img src='$gif' alt=''>";
            }
      ?>
      
</body>
</html>