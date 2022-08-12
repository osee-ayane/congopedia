<?php
session_start();
	//stocker le nom du fichier dans une variable
	// $file = 'laravel-fr.pdf';
if(isset($_SESSION['lien'])){
	$file = $_SESSION['lien'];
	//type de contenu de l'en-tête
	header('Content-Type: application/pdf');

	header('Content-Disposition: inline;filename="' . $file . '"');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	//Lire le fichier 
	@readfile($file);
	
}elseif(isset($_SESSION['chemin'])) {
	$fil = $_SESSION['chemin'];
	//type de contenu de l'en-tête
	header('Content-Type: application/pdf');

	header('Content-Disposition: inline;filename="' . $fil . '"');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	//Lire le fichier 
	@readfile($fil);
}
	// //Deuxieme maniere

	// //Le chemin du fichier (path)
	// $file = "/chemin/vers/fichier.pdf";

	// //Type de contenu d'en-tête
	// header("Content-Type: application/pdf");
	// header("Content-Length: " .filesize($file));

	// //Envoyer ;e ficier au navigateur
	// readfile($file);
?>