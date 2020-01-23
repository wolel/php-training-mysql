<?php
include ('server.php');
$name = $_POST['name'];
$difficulty = $_POST['difficulty'];
$distance = $_POST['distance'];
$duration = $_POST['duration'];
$hd = $_POST['height_difference'];


/* Exécute une requête préparée en passant un tableau de valeurs */
$dbh ='';
$sth = $dbh->prepare("SELECT * FROM hiking WHERE $name = :name and $difficulty = :difficulty and 
$distance = :distance and $duration = :duration");


$sth->execute(':name',':difficutly',':distance',':duration','height_difference');
$ajouter = $sth->fetchAll();
$sth->execute(array(175, 'jaune'));
$yellow = $sth->fetchAll();



$sql = "SELECT * FROM hiking WHERE $name = :name"

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="button" name="button">Envoyer</button>
	</form>
</body>
</html>
