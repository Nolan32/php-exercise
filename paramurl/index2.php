<!-- exo 4 -->
<?php

$language=$_GET['language'];
$serveur = $_GET['serveur'];


if ($language ==='php'&& $serveur === 'LAMP') {
	echo 'le language utilisé est: '.$language.' et le serveur utilisé est '.$serveur.'.';
}

?>