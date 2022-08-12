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
		if(!empty($npasse) AND !empty($login)){
			$sql = $cn->prepare("SELECT * FROM lecteur WHERE nom = ? AND mpasse = ?");
			$sql->execute(array($login, $npasse));
			$exist = $sql->rowCount();
			if($exist == 1){
				while($dt = $sql->fetch()){
				$_SESSION['nlect'] = $dt['nom'];
				$slq = "INSERT INTO lecture_con (datecon, lid) VALUES (NOW(), ?)";
				$reqt = array($dt['lid']);
				try{
					$req = $cn->prepare($slq);
					$req->execute($reqt);
					header("Location:readerpage.php");
					}catch(Exception $d){
						die('Erreur!'.$d->getMessage());
					}
				}
			}else{								
				header("Location:index.php");
			}
		}
	}elseif(isset($_POST['conadmin'])){
		$login = htmlspecialchars($_POST['login']);
		$npasse = htmlspecialchars($_POST['passw']);
		$fonction = $_POST['fonction'];
		if(!empty($npasse) AND !empty($login)){
			$sql = $cn->prepare("SELECT * FROM adminitrateur WHERE login = ? AND mpasse = ? AND fonction = ?");
			$sql->execute(array($login, $npasse, $fonction));
			$exist = $sql->rowCount();
			if($exist == 1){
					header("Location:managersite.php");
			}else{					
				header("Location:administrator.php");
			}
		}
	}
?>