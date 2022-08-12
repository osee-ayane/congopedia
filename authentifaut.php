<?php
session_start();
//connection
//include_once('classes/Authentification.class.php');
include('classes/Connection.class.php');
$con = new Connection();
$cn = $con->connectionb();

	if(isset($_POST['btncon'])){
		$login = htmlspecialchars($_POST['login']);
		$npasse = htmlspecialchars($_POST['passw']);
		if(!empty($login) AND !empty($npasse)){
			$sql = $cn->prepare("SELECT * FROM t_auteur as a INNER JOIN lecteur as l ON l.lid = a.lid WHERE nomat = ? AND mpat = ?");
			$sql->execute(array($login, $npasse));
			$exist = $sql->rowCount();
				if($exist == 1){
					$dt = $sql->fetch();
					$_SESSION['nom'] = $dt['nomat'];
					$_SESSION['prenom'] = $dt['prenomat'];
					$_SESSION['mpasse'] = $dt['mpat'];
					$_SESSION['phonel'] = $dt['phone'];
					$_SESSION['iprofil'] = $dt['iprofil'];
					$slq = "INSERT INTO auteur_con (datecon, idat) VALUES (NOW(), ?)";
					$reqt = array($dt['uid']);
					try{
						$req = $cn->prepare($slq);
						$req->execute($reqt);
						header("Location:auteuradmin.php");
						}catch(Exception $d){
							die('Erreur!'.$d->getMessage());
						}
				}else{
					header("Location:connexion_auteur.php");
				}
		}
	}
?>