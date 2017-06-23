<?php
$Pseudo = $_GET['Pseudo'];
$Password = $_GET['Psw'];

setcookie('Pseudo',$Pseudo,time() +365*24*3600,null,null,false,true);
setcookie('Psw',$Password,time() +365*24*3600,null,null,false,true);
?>



<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<p><?php echo 'Bienvenue sur ta session '.$_COOKIE['Pseudo'].' ton mot de passe est : '.$_COOKIE['Psw'].' .haha'; ?></p>

		<p>Modification de ton compte :</p>
		<form method="GET" action='index1.php'>
			<label for='id'>Pseudo</label>
			<input type="text" name="Pseudo" id='id'>
			<label for='mdp'>Password</label>
			<input type="password" name="Psw" id='mdp'>
			<button type='submit'>Submit</button>
		</form>

</body>
</html>
