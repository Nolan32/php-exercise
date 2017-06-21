<!-- exo 1 et 2 -->
<?php

$nom = @$_REQUEST['nom'];
$prenom = @$_REQUEST['prenom'];
$age = @$_REQUEST['age'];



if ($age ===null) {
	echo 'Bonjour '.$nom. ' '.$prenom.' veuillez indiquez votre age';
}else{
	echo 'Bonjour ' .$nom. ' '.$prenom.' '.$age.'ans';
}
	
?>