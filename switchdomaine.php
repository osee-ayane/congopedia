<?php
session_start();
include('classes/Connection.class.php');
$con = new Connection();
$cn = $con->connectionb();
if(isset($_POST['myswt'])){
	if (!empty($_POST['contenudom'])) {
		 //premier ligne
		$rech = $cn->prepare('SELECT * FROM (ouvrage o INNER JOIN t_auteur t ON t.uid = o.id_aut) INNER JOIN domaine d ON d.did = o.id_dom WHERE d.nom_domaine = ?');
		$rech->execute(array($_POST['contenudom']));
		while($dat = $rech->fetch()){
			$_SESSION['ndom'] = $dat['nom_domaine'];
			switch ($_SESSION['ndom']) {
				case 'Agronomie':
					header("Location:agronomie.php");
					break;
				case 'Biologie':
					header("Location:biologie.php");
					break;
				case 'Chimies':
					header("Location:chimies.php");
					break;
				case 'Langues':
					header("Location:langues.php");
					break;
				case 'Droit':
					header("Location:droit.php");
					break;
				case 'Botanique':
					header("Location:botanique.php");
					break;
				case 'Economie_et_Gestion':
					header("Location:ecoetgestion.php");
					break;
				case 'Genie_civil':
					header("Location:geniecivil.php");
					break;
				case 'Geologie':
					header("Location:geologie.php");
					break;
				case 'Medecine':
					header("Location:medecine.php");
					break;
				case 'Informatique':
					header("Location:informatique.php");
					break;
				case 'Mathematique':
					header("Location:mathematique.php");
					break;
				case 'Statistique':
					header("Location:statistique.php");
					break;
				case 'Spa':
					header("Location:spa.php");
					break;
				case 'Psychologie':
					header("Location:psychologie.php");
					break;
				case 'Philosophie':
					header("Location:philosophie.php");
					break;
				default:
					header("Location:pagepourtous.php");
					break;
			}
		}
	}
}
?>