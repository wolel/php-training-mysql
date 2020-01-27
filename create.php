<?php
MYSQL_STMT	*req_prep;

$prepareRequete = PREPARE select_hiking;
"FROM 'SELECT * FROM hiking WHERE name = ? AND difficulty = ? AND distance = ? AND duration = ? AND height_difference = ?'";

// On prépare la requête
if (mysql_stmt_prepare(req_prep, req_texte, strlen(req_texte)) != 0)
{
    printf("Impossible de préparer la requête");
    exit(0);
}

if (mysql_stmt_execute(req_prep) != 0)
{
    printf("Impossible d'exécuter la requête");
    exit(0);
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<fieldset>
    <legend>SITE DE RANDONNEES</legend>
<a href="read.php">Liste des données</a>
	<div id="ajouter"><h1>Ajouter</h1></div>
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
		<button type="submit" name="button">Envoyer</button>
	</form>
</fieldset>
</body>
</html>
