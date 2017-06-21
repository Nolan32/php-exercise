<!-- exo 5 -->
<?php

$semaine = $_GET['semaine'];

if ($semaine ==='12') {
	echo 'nous sommes la '.$semaine." ème semaine de l'année";
}else{
	echo "nous ne  sommes pas la 12ème semaine de l'année mais la ".$semaine." ème semaine de l'année";
}

?>