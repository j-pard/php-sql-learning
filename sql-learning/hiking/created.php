<?php
	require 'session.php';
	require 'isadmin.php';

	// Check Inputs (Not the best way, i know)
	if(isset($_POST["name"])) {
		$name = $_POST["name"];
	}
	else {
		$name = "";
	}

	if(isset($_POST["difficulty"])) {
		$difficulty = $_POST["difficulty"];
	}
	else {
		$difficulty = "";
	}

	if(isset($_POST["distance"])) {
		$distance = $_POST["distance"];
	}
	else {
		$distance = "";
	}

	if(isset($_POST["duration"])) {
		$duration = $_POST["duration"];
	}
	else {
		$duration = "";
	}

	if(isset($_POST["height_difference"])) {
		$height = $_POST["height_difference"];
	}
	else {
		$height = "";
	}

	if(isset($_POST["available"])) {
		$isAvailable = $_POST["available"];
	}
	else {
		$isAvailable = "";
	}

	// Check if inputs are empty
	if(empty($name) || empty($difficulty) || empty($distance) || empty($duration) || empty($height) || empty($isAvailable)) {
		echo "<p class='warning'>Attention, tous les champs doivent être remplis !</p>";
	}
	else {
		require 'connect.php';

		$sql = ("INSERT INTO hiking 
				(name, difficulty, distance, duration, height_difference, available)
				VALUES 
				(?, ?, ?, ?, ?, ?)");
		
		$requete = $db->prepare($sql);

		$duration = $duration . ":00"; // Respect the SQL format

		if(isset($_POST["button"]) && $_POST["button"] == "send") {
				$values = [$name, $difficulty, floatval($distance), $duration, intval($height), intval($isAvailable)];
				
				//Check for unique name
				$checkSQL = ("SELECT count(*) AS total FROM hiking WHERE name = ?");
				$checkRequest = $db->prepare($checkSQL);
				$checkRequest->execute(array($name));
				$arrayReturned = $checkRequest->fetch();
				$total = $arrayReturned['total'];

				if($total == 0) {
					//UNIQUE NAME -> OK FOR EXECUTE
					$requete->execute($values);
					echo "<p class='success'>La randonnée " . $name . " a été ajoutée. </p>";
				}
				else {
					echo "<p class='warning'>La randonnée existe déjà. Veuillez entrer un nom différent.</p>";
				}		
		}
		else {
			echo "<p class='warning'>Erreur lors de l'ajout à la base de données.</p>";
		}
		
		$checkRequest->closeCursor();
		$requete->closeCursor();
	}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/basics.css">
      <title>Création de randonnée</title>
</head>
<body>
      <a href="create.php">Retour</a>
</body>
</html>