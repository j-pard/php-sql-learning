<?php
	require 'session.php';
	require 'isadmin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/SQL-hiking/read.php">Liste des randonnées</a>
	<h1>Ajouter</h1>
	<form action="created.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="Très facile">Très facile</option>
				<option value="Facile">Facile</option>
				<option value="Moyen">Moyen</option>
				<option value="Difficile">Difficile</option>
				<option value="Très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="number" name="distance" value="" step="0.1">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="time" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="number" name="height_difference" value="" step="1">
		</div>
		<div>
			<label for="available">Accessible</label>
			<input type="number" name="available" value="" step="1" min="0" max="1">
		</div>
		<button type="submit" name="button" value="send">Envoyer</button>
	</form>

</body>
</html>
