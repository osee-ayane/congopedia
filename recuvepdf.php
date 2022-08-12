<?php
	//connexion					
include('classes/Connection.class.php');
$con = new Connection();
$cn = $con->connectionb();
if(isset($_POST['enregistrer'])){
	// include_once('Uploadpdf.class.php');
	// $fichier1 = new Fichier();
	// $fichier1->uploderfichier($_FILES['pdf'], $_POST['annee']);
		//test sur les erreurs a survenir
		if(isset($_FILES['pdf']) AND $_FILES['pdf']['error'] == 0){
			//test sur la taille
			if($_FILES['pdf']['size'] <= 8000000){
				//recuperation des extensions
				$infofile = pathinfo($_FILES['pdf']['name']);
				$fextension_up = $infofile['extension'];
				//extension autorisée
				$extension_autorise = array('pdf', 'txt');
				//text sur les extension
				if(in_array($fextension_up, $extension_autorise)){
					//chemin du lien à enregistrer
					$pdfname = $_FILES['pdf']['name'];
					$liens = "bcongopdf/".$pdfname;
					move_uploaded_file($_FILES['pdf']['tmp_name'], 'bcongopdf/'.basename($_FILES['pdf']['name']));

					// insertion dans la base de donnés
					$chemin = $_FILES['pdf']['name'];
					//insertion
					$sql = "INSERT INTO ouvrager (titre, liens) VALUES (:titre, :liens)";
					$a_data = array(':titre'=>$chemin, ':liens'=>$liens);
						try{
							$req = $cn->prepare($sql);
							//valorise les parametres
							$req->execute($a_data);
							echo "Vous avez bien ajouter";
							echo "datas:<br>";
							print_r($a_data);
							echo "</pre>";
						}catch(Exception $e){
							echo "<pre><br>Erreur dans la requete</br>".$e->getMessage()."<br>";
							echo "datas:<br>";
							print_r($a_data);
							echo "</pre>";
						}
				}else{
					echo  "Format non autorisé";
				}
			}else{
				echo "Fichier trop grand";
			}
		}else{
			echo "Erreur survenu lors du chargement";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>recuperation pdf</title>
</head>
<body>
	<form method="POST" action="recuvepdf.php" enctype="multipart/form-data">
		<input type="file" name="pdf" placeholder="titre">
		<input type="text" name="maison" placeholder="maison">
		<input type="text" name="annee" placeholder="annee">
		<input type="text" name="contenu" placeholder="contenu">
		<input type="text" name="resume" placeholder="resume">
		<input type="submit" name="enregistrer" valur="enregistrer">
	</form>
	<?php
		$req = $bdd->prepare("SELECT liens FROM ouvrager WHERE id = 4");
		$req->execute();
		while($d = $req->fetch()){
			echo '<a href="'.$d['liens'].'">Livre1</a>';
			print_r($d);
			echo '<a href="bcongopdf/pdf2.pdf">livres2</a>';
		}
	?>
</body>
</html>
