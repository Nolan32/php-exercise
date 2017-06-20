<?php

$first_number = 20;

$second_number = 56;

function PetitBiscuit($first_number, $second_number){
	if ($first_number < $second_number) {
		echo 'le premier chiffre est plus petit que le deuxieme chiffre';
	}elseif ($first_number === $second_number) {
		echo'le premier chiffre est égale au deuxieme';
	}else{
		echo 'le premier chiffre est plus grand que le deuxieme';
	}
}

PetitBiscuit($first_number, $second_number);

?>