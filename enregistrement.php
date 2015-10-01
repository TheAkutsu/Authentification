<?php
    //----------recup des parametres --------
	$nbrColonne = 6;
	$nomUtil = $_GET['nom'];
	$prenomUtil = $_GET['prénom'];
	$mdp = $_GET['email'];
	$adresse = $_GET['adresse'];
	$telephone  = $_GET['tel'];
	
	//-------une ligne d'enregistrement------
	$tabEnregistrement = array();
	$tabEnregistrement[0] = $nomUtil;
	$tabEnregistrement[1] = $prenomUtil;
	$tabEnregistrement[2] = $mdp;
	$tabEnregistrement[3] = $adresse;
	$tabEnregistrement[4] = $telephone;
	$tabEnregistrement[5] = "";

	/*------Chargement $tableauClient vers Fichier---*/
	$monFichierClient = fopen("listeClient.txt", "a") or die("Unable to open file!");
	for($col = 0 ; $col < $nbrColonne; $col++){
		$txt =  $tabEnregistrement[$col] . '|';
		fwrite($monFichierClient, $txt);
	}
	fwrite($monFichierClient,"#");
	fclose($monFichierClient);
	
?>