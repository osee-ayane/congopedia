<?php
//connection
include_once('classes/Lecteur.class.php');
// include('classes/Connection.class.php');
// $con = new Connection();
// $cn = $con->connectionb();

	if(isset($_POST['btnsv'])){
		$nom = htmlspecialchars($_POST['fnom']);
		$prenom = htmlspecialchars($_POST['snom']);
		$daten = htmlspecialchars($_POST['dnaisse']);
		$mail = htmlspecialchars($_POST['l_email']);
		$phone = htmlspecialchars($_POST['phone']);
		$npasse = htmlspecialchars($_POST['passw']);
		$cpasse = htmlspecialchars($_POST['passc']);
		if($npasse == $cpasse){
			//appel de la fonction
			$enreg = new Lecteur();
			$test = $enreg->add_lectures($nom, $prenom, $daten, $mail, $phone, $cpasse);
			if(isset($test)){
				header("Location:index.php");
			}else{
				header("Location:createaccount.php");
			}
		}else{
			$_SESSION['msge'] = "<script>alert('La confirmation a echoué');</script>";
		}
	}
?>