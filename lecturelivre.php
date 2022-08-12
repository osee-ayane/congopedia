<?php
session_start();
include('classes/Connection.class.php');
$con = new Connection();
$cn = $con->connectionb();
if(isset($_POST['lirebtn'])){
	$lecteur = $_SESSION['nlect'];
	$chemin = $_SESSION['chemins'];
	$sql = $cn->prepare('SELECT * FROM lecteur WHERE nom = ?');
	$sql->execute(array($lecteur));
	while($data = $sql->fetch()){
		$sq = $cn->prepare('SELECT * FROM ouvrage WHERE cheminlv = ?');
		$sq->execute(array($chemin));
		while ($dt = $sq->fetch()) {
			$s = $cn->prepare('INSERT INTO lire (lid, ovid, date_lecture) VALUES (?, ?, NOW())');
			$s->execute(array($data['lid'], $dt['oid']));
			if(isset($s)){
				$_SESSION['chemin'] = $dt['cheminlv'];
				header("Location:openpdf.php");
			}else{
				echo "Erreur du serveur de lecture";
			}
		}
	}
}
?>