<?php
 include('classes/Connection.class.php');
 $con = new Connection();
 $cn = $con->connectionb();
 if(isset($_POST['validerdom']) AND !empty($_POST['domaine'])){
 	$sql = $cn->prepare('SELECT * FROM domaine WHERE nom_domaine = ?');
 	$sql->execute(array($_POST['domaine']));
 	$exist = $sql->rowCount();
 	if($exist == 0){
 		$sl = $cn->prepare('INSERT INTO domaine(nom_domaine) VALUES (?)');
 		$sl->execute(array($_POST['domaine']));
 		if(isset($sl)){
 			header("Location:managersite.php");
 		}else{
 			echo 'Erreur lors de l\'enregistrement. <span class="btn btn-info btn-xs"><a href="managersite.php">Retour</a></span>';
 		}
 	}else{
 		echo 'Le domaine '.$_POST['domaine'].' existe déjà. <span class="btn btn-info btn-xs"><a href="managersite.php">Retour</a></span>';
 	}
 }elseif(isset($_POST['valideradmin'])) {
     if(!empty($_POST['login']) AND !empty($_POST['mpasse']) AND !empty($_POST['fonction'])){
        $sq = $cn->prepare('SELECT * FROM adminitrateur WHERE login = ? AND mpasse = ? AND fonction = ?');
        $sq->execute(array($_POST['login'], $_POST['mpasse'], $_POST['fonction']));
        $exis = $sq->rowCount();
        if($exis == 0){
            $rs = $cn->prepare('INSERT INTO adminitrateur(login, mpasse, fonction) VALUES (?, ?, ?)');
            $rs->execute(array($_POST['login'], $_POST['mpasse'], $_POST['fonction']));
            if(isset($rs)){
                header("Location:managersite.php");
            }else{
                echo 'Erreur lors de l\'enregistrement. <span class="btn btn-info btn-xs"><a href="managersite.php">Retour</a></span>';
            }
        }else{
            echo 'L\'administrateur '.$_POST['login'].' existe déjà. <span class="btn btn-info btn-xs"><a href="managersite.php">Retour</a></span>';
        }
     }
 }
?>