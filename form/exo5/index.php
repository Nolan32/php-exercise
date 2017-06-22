<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Creation formulaire en php + envoie donnée</title>
	</head>
	<body>
		
				<?php
					$Civilité = $_POST['Civilité'];
					$prenom = $_POST['prenom'];
					$nom = $_POST['nom'];
					$file= $_POST["File"];
					$ext=pathinfo($file);
					$extension = $ext{"extension"};



					if($Civilité==null || $nom==null || $prenom==null || $extension!="pdf"){
						echo '<form method="POST" action="#">
									<div>
										<label>Civilité</label>
										<select name="Civilité">
											<option>Veuillez indiquer votre Civilité</option>
											<option value="MR">MR</option>
											<option value="Mme">Mme</option>
										</select>
									</div>
									<div>
										<label for="name">Nom</label>
										<input type="text" id="name" name="nom" placeholder="ex Dupont">
									</div>
									<div>
										<label for="last_name">Prenom</label>
										<input type="text" id="last_name" name="prenom" placeholder="ex Didier">
									</div>
									<div>
										<label for="file">Ajouter un fichier(extension accepter:pdf</label>
										<input type="file" name="File">
									</div>
										<button type="submit">Submit</button>
									</div>		
								</form>';
					}else{
						echo "bonjour".$Civilité.' '.$nom.'  '.$prenom.' votre fichier upload :'.$file.' et l\'extension est '.$extension.'... c\'est ok !';
					}
						// var_dump(HEADER);
				?>





	</body>
</html>