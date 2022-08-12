<?php
session_start();
//connexion					
include('classes/Connection.class.php');
$con = new Connection();
$cn = $con->connectionb();
//importer la classe
include_once('classes/Auteur.class.php');
if(isset($_POST['btnsv'])){
		$nom = htmlspecialchars($_POST['fnom']);
		$prenom = htmlspecialchars($_POST['snom']);
		$pays = htmlspecialchars($_POST['pays']);
		$ville = htmlspecialchars($_POST['ville']);
		$daten = htmlspecialchars($_POST['dnaisse']);
		$mail = htmlspecialchars($_POST['l_email']);
		$phone = htmlspecialchars($_POST['phone']);
		$profil = 'nihil';
		$_SESSION['pss'] = htmlspecialchars($_POST['m_passe']);
			//appel de la fonction
			$enreg = new Auteur();
			$test = $enreg->add_lectures($nom, $prenom, $pays, $ville, $daten, $mail, $phone, $_SESSION['pss'], $profil);
			if(isset($test)){
				header("Location:auteuradmin.php");
			}else{
				echo '<div style="color:red;background-color:rgba(0, 0, 0, 0.2);">Une erreur est survenue. Veiullez verifier la conformité des informations envoyées</div>';
			}
	}
if(isset($_POST['btnenreg'])){
	//les variables
	$nomaut = htmlspecialchars($_POST['nomaut']);
	$domaine = htmlspecialchars($_POST['domaine']);
	$titre = htmlspecialchars($_POST['titre']);
	$lieu = htmlspecialchars($_POST['lieuedit']);
	$maison = htmlspecialchars($_POST['msedit']);
	$anned = htmlspecialchars($_POST['anedit']);
	$npage = htmlspecialchars($_POST['npage']);
	$contenu = htmlspecialchars($_POST['contenu']);
		//test sur les erreurs a survenir 
		if(isset($_FILES['pdf']) AND $_FILES['pdf']['error'] == 0){
			if(isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
				//test sur la taille
				if($_FILES['pdf']['size'] <= 8000000){
					if($_FILES['image']['size'] <= 8000000){
							//recuperation des extensions pour pdf
							$infofile = pathinfo($_FILES['pdf']['name']);
							$fextension_up = $infofile['extension'];
							//recuperation des extensions pour image
							$infof = pathinfo($_FILES['image']['name']);
							$ex_up = $infof['extension'];
							//extension autorisée pour livre
							$extension_autorise = array('pdf', 'txt');
							//extension autorisée pour livre
							$ex_autorise = array('jpeg', 'png', 'jpg');
							//text sur les extension
							if(in_array($fextension_up, $extension_autorise)){
								if(in_array($ex_up, $ex_autorise)){
								//chemin du lien à enregistrer
								$pdfname = $_FILES['pdf']['name'];
								// insertion dans la base de donnés
								//move_uploaded_file($_FILES['pdf']['tmp_name'], 'bcongopdf/'.basename($_FILES['pdf']['name']));
										//move_uploaded_file($_FILES['pdf']['tmp_name'], 'bcongopdf/'.basename($_FILES['pdf']['name']));
								// chemin pour l'image
								$imgname = $_FILES['image']['name'];
								$liens = "imagescouvert/".$imgname;
								//insertion de l'image dans le repertoire
								move_uploaded_file($_FILES['image']['tmp_name'], 'imagescouvert/'.basename($_FILES['image']['name']));
								//définitions des contraintes
								$d = $cn->prepare("SELECT * FROM domaine WHERE nom_domaine = ?");
								$d->execute(array($domaine));
								while($rd = $d->fetch()){
									//création du chemin
								//$cheminv = "bcongopdf/".$pdfname;
								$cheminv = $rd['nom_domaine'].'/'.$pdfname;
								//insertion dans le repertoire
										move_uploaded_file($_FILES['pdf']['tmp_name'], $rd['nom_domaine']."/".basename($_FILES['pdf']['name']));
									$at = $cn->prepare("SELECT * FROM t_auteur WHERE nomat = ?");
									$at->execute(array($nomaut));
									while($rat = $at->fetch()){
										//insertion
										$sql = "INSERT INTO ouvrage (titre_ouvrage, cheminlv, limage, lieued, msedit, annee_edition, resume, nbpage, id_aut, id_dom, dateer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
										$a_data = array($titre, $cheminv, $liens, $lieu, $maison, $anned, $contenu, $npage, $rat['uid'], $rd['did']);
											try{
												$req = $cn->prepare($sql);
												//valorise les parametres
												$req->execute($a_data);
												header("Location:auteuradmin.php");
													//print_r($a_data);
											}catch(Exception $e){
												echo '<pre style="background-color:rgba(0, 0, 0, 0.2);"><br>Erreur dans la requete</br>".$e->getMessage()."<br>";
												echo "datas:<br>';
												print_r($a_data);
												echo '</pre>';
											}
										}
									}
								}else{
								echo  "Format non autorisé";
								}
							}else{
								echo  "Format non autorisé";
							}
						}else{
							echo "Fichier trop grand";
						}
					}else{
							echo "Fichier trop grand";
						}
			}else{
				echo "Erreur survenu lors du chargement";
			}
		}else{
			echo "Erreur survenu lors du chargement";
		}
}
?>
