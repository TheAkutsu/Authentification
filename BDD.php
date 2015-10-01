<?php
/***************************/
/*        BDD			   */	
/***************************/
/*------------extraction-------*/
$monFichierClient = fopen("listeClient.txt", "r") or die("Unable to open file!");
$chaine  = fread($monFichierClient,filesize("listeClient.txt"));
fclose($monFichierClient);

/*------------tableau----------*/
if($chaine !=""){//echo $chaine;
	$tabLigne = explode("#",$chaine);
	$tableauClient = array();
	for($ligne = 0 ; $ligne < sizeof($tabLigne); $ligne++){
		$uneLigne = array();
		$uneLigne = explode("|",$tabLigne[$ligne]);
		$tableauClient[$ligne] = $uneLigne;
	}
}
?>