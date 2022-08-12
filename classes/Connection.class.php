<?php
class Connection{
	private $bdd;
	//fonction de la connection
	public function connectionb(){
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=digitech', 'root', 'root');
			//echo "conneter";
		}catch(Exception $e){
			die('Erreur'.$e->getMessage());
		}
		return $bdd;
	}
}