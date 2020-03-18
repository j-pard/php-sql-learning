<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Variable types</title>
</head>
<body>
      
      <?php
            $firstName = "Jo";
            $age = "28";
            $eyesColor = "brown";
            $family = array(
                  0 => "Laëtitia",
                  1 =>  $firstName,
                  2 => "Mushu",
                  3 => "Perle"
            );

            
      ?>

      <p>Hi, my name is <?php echo $firstName ?>.</p>
      <p>I am <?php echo $age ?> years old</p>
      <p>My eyes are <?php echo $eyesColor ?>.</p>
      <p>The first person in my family is <?php echo $family[0] ?></p>

</body>
</html>