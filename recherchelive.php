<?php
session_start();
include('classes/Connection.class.php');
$con = new Connection();
$cn = $con->connectionb();
if(isset($_POST['btnlivre'])){
	$trech = htmlspecialchars($_POST['livre']);
	$rech = $cn->prepare('SELECT * FROM (ouvrage o INNER JOIN t_auteur t ON t.uid = o.id_aut) INNER JOIN domaine d ON d.did = o.id_dom WHERE o.titre_ouvrage like ? OR t.nomat like ? OR d.nom_domaine like ?');
	$rech->execute(array('%'.$trech.'%', '%'.$trech.'%', '%'.$trech.'%'));
	while($data = $rech->fetch()){
		$_SESSION['lien'] = $data['cheminlv'];
		$_SESSION['image'] = $data['limage'];
		$_SESSION['otitre'] = $data['titre_ouvrage'];
		$_SESSION['auteur'] = $data['nomat'];
		$_SESSION['preaut'] = $data['prenomat'];
		$_SESSION['edition'] = $data['msedit'];
		$_SESSION['anedit'] = $data['annee_edition'];
		$_SESSION['pagen'] = $data['nbpage'];
		$_SESSION['resume'] = $data['resume'];
	}
	header("Location:youranswer.php");
}
?>