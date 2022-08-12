<?php
//connection
include_once('classes/Auteur.class.php');
	if(isset($_POST['btnsv'])){
		$nom = htmlspecialchars($_POST['fnom']);
		$prenom = htmlspecialchars($_POST['snom']);
		$pays = htmlspecialchars($_POST['pays']);
		$ville = htmlspecialchars($_POST['ville']);
		$daten = htmlspecialchars($_POST['dnaisse']);
		$mail = htmlspecialchars($_POST['l_email']);
		$phone = htmlspecialchars($_POST['phone']);
		$npasse = htmlspecialchars($_POST['passw']);
		$cpasse = htmlspecialchars($_POST['passc']);
		if($npasse == $cpasse){
					if(isset($_FILES['iprofil']) AND $_FILES['iprofil']['error'] == 0){
						//test sur la taille
							if($_FILES['iprofil']['size'] <= 8000000){
									//recuperation des extensions pour pdf
									$infofile = pathinfo($_FILES['iprofil']['name']);
									$fextension_up = $infofile['extension'];
									//extension autorisée pour livre
									$ex_autorise = array('jpeg', 'png', 'jpg');
									//text sur les extension
									if(in_array($fextension_up, $ex_autorise)){
										//chemin du lien à enregistrer
										$pdfname = $_FILES['iprofil']['name'];
										$cheminv = "profilauteur/".$pdfname;
										// insertion dans la base de donnés
										move_uploaded_file($_FILES['iprofil']['tmp_name'], 'profilauteur/'.basename($_FILES['iprofil']['name']));
										// chemin pour l'image
					//appel de la fonction
					$enreg = new Auteur();
					$test = $enreg->add_lectures($nom, $prenom, $pays, $ville, $daten, $mail, $phone, $cpasse, $cheminv);
					if(isset($test)){
						header("Location:connexion_auteur.php");
					}else{
						header("Location:creation_auteur.php");
					}
				}else{
					echo "L'image doit avoir jpeg, jpg ou png comme extension";
				}
			}else{
				echo "L'image est trop grande";
			}
		}else{
			echo "Erreur lors du chragement";
		}
		}else{
			echo "La confirmation a echoué!";
		}
	}
?>