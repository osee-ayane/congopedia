<?php 
include_once('Connection.class.php');

class Lecteur{
	//les variables
	private $noml;
	private $prenoml;
	private $datenaissl;
	private $maill;
	private $phonel;
	private $mpassel;
	//fonction de creation nu nouveau compte
	public function add_lectures($noml, $prenoml, $datenaissl, $maill, $phonel, $mpassel){
		//affectation	
	// $noml =$nom;
	// $prenoml = $prenom;
	// $datenaissl = $datenaiss;
	// $maill = $mail;
	// $phonel = $phone;
	// $mpassel = $mpasse;
	$con = new Connection();
	$cn = $con->connectionb();
				if(!empty($noml) AND !empty($datenaissl) AND !empty($mpassel)){
					if(preg_match('#^0[8-9]{1}[0-9]{8}$#', $phonel)){
						$sql = $cn->prepare("SELECT * FROM lecteur WHERE phone = ?");
						$sql->execute(array($phonel));
						$exist = $sql->rowCount();
							if($exist == 0){
								$slq = "INSERT INTO lecteur (nom, prenom, datenaiss, ad_mail, phone, mpasse) VALUES (?, ?, ?, ?, ?, ?)";
								$reqt = array($noml, $prenoml, $datenaissl, $maill, $phonel, $mpassel);
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