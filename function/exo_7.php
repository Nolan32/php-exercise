<?php
$genre;
$age;



function send($genre, $age){
	if($genre ==='homme'&& $age >= 18){
		echo 'vous etes un homme et vous etes majeur';
	}elseif($genre ==='homme' && $age < 18){
		echo 'vous etes un homme non majeur';
	}
	elseif($genre ==="femme" && $age >= 18){
		echo 'vous etes une femme majeur';
	}elseif($genre==='femme' && $age <18){
		echo 'vous etes une femme non majeur';
	}
};
send ('femme',132);

?>