<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Page 1</title>
	</head>
	<body>
		<?php
			session_start();
			$_SESSION['prenom'] = 'Jordy';
			$_SESSION['nom'] = 'Duces';
			$_SESSION['age'] = 24;
		?>
		<p>Bonjour <?php echo $_SESSION['prenom'],' '.$_SESSION['nom'].' et tu as : '.$_SESSION['age'].' ans.'; ?><br>
		Tu es sur la page d'accueil veut tu allez sur une autre page </p>

		<p>
			<a href="test.php">Lien vers la deuxieme page</a>
		</p>




	</body>
</html>
