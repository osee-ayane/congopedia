<?php 
include_once('Connection.class.php');

class Auteur{
	//les variables
	private $noml;
	private $prenoml;
	private $pays;
	private $ville;
	private $datenaissl;
	private $maill;
	private $phonel;
	private $mpassel;
	private $profile;
	//fonction de creation nu nouveau compte
	public function add_lectures($noml, $prenoml, $pays, $ville, $datenaissl, $maill, $phonel, $mpassel, $profile){
		//affectation	
	// $noml =$nom;
	// $prenoml = $prenom;
	// $datenaissl = $datenaiss;
	// $maill = $mail;
	// $phonel = $phone;
	// $mpassel = $mpasse;
	$con = new Connection();
	$cn = $con->connectionb();
				if(!empty($noml) AND !empty($maill) AND !empty($mpassel)){
					if(preg_match('#^0[8-9]{1}[0-9]{8}$#', $phonel)){
						$sql = $cn->prepare("SELECT * FROM auteur WHERE phoneat = ?");
						$sql->execute(array($phonel));
						$exist = $sql->rowCount();
						//verification du compte lecteur
						$ql = $cn->prepare("SELECT * FROM lecteur WHERE phone = ?");
						$ql->execute(array($phonel));
						$ext = $ql->rowCount();
							if($exist == 0 AND $ext == 1){

								$dt = $ql->fetch();
								$slq = "INSERT INTO auteur (lid, nomat, prenomat, paysat, villeat, datenat, mailat, phoneat, mpat, iprofil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
								$reqt = array($dt['lid'], $noml, $prenoml, $pays, $ville, $datenaissl, $maill, $phonel, $mpassel, $profile);
								try{
									$req = $cn->prepare($slq);
									$req->execute($reqt);
									//message de confirmation
									echo "<script>alert('Enregistre avec succès')</script>";
								}catch(Exception $d){
									die('Erreur!'.$d->getMessage());
								}
							}else{
								echo "<script>alert('Déja existant')</script>";
							}
					}
			}
	return $noml;
	}
}