<form method="get" action="index.php">
      <div>
            <input type="radio" name="genre" id="female" value="female">
            <label for="female">Female</label>
            <input type="radio" name="genre" id="male" value="male">
            <label for="male">Male</label>
      </div>

      <div class="column">
            <label for="firstname">Firstname :</label>
            <input type="text" name="firstname" required>
      </div>
      <div class="column">
            <label for="lastname">Lastname :</label>
            <input type="text" name="lastname" required>
      </div>
      <div class="column">
            <input type="submit" value="Register">
      </div>
</form>