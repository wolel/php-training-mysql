<?php
include ('server.php');


function liste_randonné(){
    global $conn;
    $afficher = "SELECT name FROM `hiking` WHERE 1";
    $resultat = $conn->query($afficher);

    while($info = $resultat->fetch_assoc()){
        echo '<ul><li>'.$info['name'].'</li></ul>';
    }
}
//--------------------------------------------------------------------

function ajouter(){
    global $conn;
    $ajouter = "INSERT INTO hiking VALUES (null, 'randonée des LACS verts','facile', '13','05:00:00','670')";
    $resultat = $conn->query($ajouter);
    while ($info = $resultat->fetch_assoc()){
        echo $info;
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
        <div><?php echo liste_randonné()?></div>
    </table>
  </body>
</html>
