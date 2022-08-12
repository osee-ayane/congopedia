<?php 
include_once('Connection.class.php');

class Authentification{
	//les variables
	private $login;
	private $mpas;
	public function sauthentifier($login, $mpas){
		//appel de la classe connexion
		$con = new Connection();
		$cn = $con->connectionb();
				if(!empty($login) AND !empty($mpas)){
						$sql = $cn->prepare("SELECT * FROM lecteur WHERE nom = ? AND mpasse = ?");
						$sql->execute(array($login, $mpas));
						$exist = $sql->rowCount();
							if($exist == 1){
								$dt = $sql->fetch();
									$slq = "INSERT INTO lecture_con (datecon, lid) VALUES (NOW(), ?)";
									$reqt = array($dt['lid']);
									try{
										$req = $cn->prepare($slq);
										$req->execute($reqt);
										header("Location:readerpage.php");
									}catch(Exception $d){
										die('Erreur!'.$d->getMessage());
									}
							}else{
								header("Location:index.php");
							}
					}
	}
	// public function auth_auteur($login, $mpas){
	// 			if(!empty($login) AND !empty($mpas)){
	// 					$sql = $cn->prepare("SELECT * FROM auteur WHERE nomat = ? AND mpat = ?");
	// 					$sql->execute(array($login, $mpas));
	// 					$exist = $sql->rowCount();
	// 						if($exist == 1){
	// 							$dt = $sql->fetch();
	// 								$slq = "INSERT INTO auteur_con (datecon, idat) VALUES (NOW(), ?)";
	// 								$reqt = array($dt['uid']);
	// 								try{
	// 									$req = $cn->prepare($slq);
	// 									$req->execute($reqt);
	// 									header("Location:readerpage.php");
	// 								}catch(Exception $d){
	// 									die('Erreur!'.$d->getMessage());
	// 								}
	// 						}else{
	// 							$_SESSION['msge'] = "<script>alert('Déja existant')</script>";
	// 							header("Location:connexion_auteur.php");
	// 						}
	// 				}
	// }
}
