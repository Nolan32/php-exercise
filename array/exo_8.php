<?php
include 'exo_1.php';
$result = count($mois);
var_dump($result);
for ($i=0; $i < $result ; $i++) { 
	echo $mois[$i],',';
 }
?>