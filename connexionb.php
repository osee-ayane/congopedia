<?php
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=digitech', 'root', 'root');
			echo "connecter";
		}catch(Exception $e){
			die('Erreur'.$e->getMessage());
		}
?>