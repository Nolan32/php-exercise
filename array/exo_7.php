<?php

include 'exo_5.php';
$new_departement = array(
						"51"	=>"Marne",
				);
foreach ($departement as $value) {
	$departement=array_replace($departement,array('51' =>"Marne" , ));
};

?>