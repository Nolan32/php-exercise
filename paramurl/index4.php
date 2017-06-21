<!-- exo6 -->
<?php

$batiment = $_GET['batiment'];
$salle = $_GET['salle'];

if ($batiment ==='12' && $salle==='101') {
	echo 'Bienvenue vous etes dans le batiment '.$batiment.' dans la salle'.$salle.'à bientot ';
}else{
	echo "hum hum vous vous etes trompé d'étage ou de salle";	 
}