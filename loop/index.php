<?php
		// exo numéro 1
	echo'Exo 1','<br/>';
 for ($nombre_de_ligne=1; $nombre_de_ligne <= 10 ; $nombre_de_ligne++) { 

 		echo'Ceci est la ligne n°' .$nombre_de_ligne .',<br/>';
 }
	// exo numéro 2
 	echo'Exo 2','<br/>';
 $first_number =0;
 $second_number = 3;
 while ($first_number <= 20) {
 	 echo $first_number * 
 	 		$second_number.',<br/>';
 	 $first_number ++;
 }

	//exo numéro 3
 	echo'Exo 3','<br/>';
 $th_number=100;
 $second_number =3;
 while ($th_number >= 10) {
 	echo 'resultat:'.$th_number *
 			$second_number.',<br/>';
 			$th_number --;
 }
	//exo 4
 echo'Exo 4','<br/>';
 $first_number =1;
  while ($first_number <= 10) {
  		echo 'result:'.
 		$first_number = $first_number + $first_number *0.5.',<br/>';
 	
 }

	//exo 5
 	echo'Exo 5','<br/>';
 $first_number =1;
 while ( $first_number<= 15) {
 	echo 'on y arrive presque ,<br/>';
 	$first_number ++;
 }


	// exo 6
 	echo'Exo 6','<br/>';
$first_number=20;
while ($first_number >= 0) {
	echo "C'est presque bon.",'<br/>';
	$first_number --;	
}
	// exo 7
	echo'Exo 7','<br/>';
$first_number =1;
while ($first_number <= 100) {
	echo'On tient le bout.','<br/>';
	$first_number=$first_number + 15;	
}
	//exo 8
	echo'Exo 8','<br/>';
$first_number =200;
while ($first_number >= 0) {
	echo 'Enfin !!!','<br/>';
	$first_number = $first_number -12;
}
?>