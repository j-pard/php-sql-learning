<div id="presentation">
      <h1>Welcome !</h1>
      <p>How are you 
      <?php 
            if($_GET["genre"] == "female") {
                  echo "Miss ";
            }
            else if($_GET["genre"] == "male") {
                  echo "Mister ";
            }
            echo $_GET["lastname"] . " " . $_GET["firstname"] . " ?"; 
      ?> 
      </p>
</div>