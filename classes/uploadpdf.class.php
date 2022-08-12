<?php 
	//connexion				
	include_once('connexionb.php');	
 class Fichier{
 	//les variables
 	//première fonction
		public function uploderfichier($monpdf){
			$_FILES['pdf'] = $monpdf;
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
					//le chemin du lien à enregistrer dans la base données
					$pdfname = 'bc'.$_FILES['pdf']['name'];
					$liens = "bcongopdf/".$pdfname;
					move_uploaded_file($_FILES['pdf']['tmp_name'], 'bcongopdf/'.basename($_FILES['pdf']['name']));

					// insertion dans la base de donnés
					$chemin = $_FILES['pdf']['name'];
					//insertion
					$sql = "INSERT INTO ouvrager (titre, liens) VALUES (:titre, :liens)";
					$a_data = array(':titre'=>$chemin, ':liens'=>$liens);
						try{
							$req = $bdd->prepare($sql);
							//valorise les parametres
							$req->execute($a_data);
							echo "Vous avez bien ajouter";
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
}
