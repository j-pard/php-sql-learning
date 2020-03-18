<?php

	require 'session.php';
	require 'isadmin.php';

	// CALL DB BY ID
	require 'connect.php';

	$sql = ("SELECT * FROM hiking WHERE id = ?");
	$toUpdate = $db->prepare($sql);
	$toUpdate->execute(array($_GET['edit']));
	$currentRando = $toUpdate->fetch();

	$toUpdate->closeCursor();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editer une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Liste des données</a>
	<h1>Update :</h1> 
	<form action="updated.php" method="post">
		<div class="not-displayed">
			<label for="ID">ID</label>
			<input type="text" name="ID" value="<?= $currentRando[0] ?>" readonly>
		</div>
		<div>
			<label for="name">Name</label>
			<input type="text" name="nameEdited" value="<?= $currentRando[1] ?>">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficultyEdited">
				<?php
					$options = [
						("<option value='Très facile'>Très facile</option>"),
						("<option value='Facile'>Facile</option>"),
						("<option value='Moyen'>Moyen</option>"),
						("<option value='Difficile'>Difficile</option>"),
						("<option value='Très difficile'>Très difficile</option>")
					];
					$optionToCheck = ("<option value='" . $currentRando[2] . "'>" . $currentRando[2] . "</option>");

					foreach ($options as $option) {
						if($option == $optionToCheck) {
							$option = ("<option value='" . $currentRando[2] . "' selected>" . $currentRando[2] . "</option>");
						}
						echo $option;
					}
				?>

			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="number" name="distanceEdited" value="<?= $currentRando[3] ?>" step="0.1">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="time" name="durationEdited" value="<?= $currentRando[4] ?>">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="number" name="height_differenceEdited" value="<?= $currentRando[5] ?>" step="1">
		</div>
		<div>
			<label for="available">Accessible</label>
			<input type="number" name="availableEdited" value="<?= $currentRando[6] ?>" step="1" min="0" max="1">
		</div>
		<button type="submit" name="updating" value="update">Update</button>
	</form>
</body>
</html>
