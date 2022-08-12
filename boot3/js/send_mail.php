<?php 
session_start();
include('classes/Connection.class.php');
$con = new Connection();
$cn = $con->connectionb();
	if(isset($_POST['commentaire'])){
		$_SESSION['cotenu'] = $_POST['commentaire'];
		$sql = $cn->prepare("SELECT * FROM lecteur WHERE nom = ?");
		$sql->execute(array($_SESSION['nlect']));
		$req = $sql->fetch();
		$er = $cn->prepare('INSERT INTO commentaire (lid, contenu, date_com) VALUES (?, ?, NOW())');
		$er->execute(array($req['lid'], $_SESSION['cotenu']));
		if(isset($er)){
			$_SESSION['interv'] = $_SESSION['nlect'];
			echo "Succes";
		}else{
			echo "Failed";
		}
	}
?>