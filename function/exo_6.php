<?php

$nom =' Duces';
$prenom =' Jordy';
$age = 24;

function send($nom,$prenom,$age){
	echo 'Bonjour',$nom ,$prenom ,' tu as ',$age,' ans';
}

send($nom,$prenom,$age);

?>