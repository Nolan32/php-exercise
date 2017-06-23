<?php
session_start()
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Deuxieme Page</title>
	</head>
	<body>
	<p>Re-Bonjour</p>
	<p>
		je me souviens de toi tu t'appelles <?php echo $_SESSION['prenom'],' '.$_SESSION['nom'].' ! '; ?><br>
		et tu as <?php echo $_SESSION['age'],' ans.'; ?> 
	</p>

	</body>
</html>