<?php
	//----------init des parametres --------
	$pointeurClient = 0;	
	$drap = false;	
	$nomUtil = $_GET['nomUtil'];
	$mdp = $_GET['mdp'];
	
	//-----appel de la base de données------
	include 'BDD.php';//var_dump($tableauClient);	
	
	//-----------------recherche-------------
	$ligne = 0;
	while($ligne < sizeof($tableauClient)){
		if($nomUtil == $tableauClient[$ligne][0]  AND $mdp == $tableauClient[$ligne][2]){			
			$pointeurClient = $ligne;// on retient l'endroit où se trouve le client
			$ligne = sizeof($tableauClient);
			$drap = true;
		}
		else $ligne++;
	}
	
	//----------------affichage---------------
	echo '<html><body><div style="margin:auto;width:800px;background:#c0c0c0;align:center">';
	if($drap){
		echo'<br><center> Bonjour Mr <font size="4">' . $nomUtil . '</font><br> voici les données de votre compte <br>';
		echo'<table border="1" width="50%"><tr>';
		for($col = 0 ; $col < sizeof($tableauClient[$pointeurClient]); $col++){
			echo'<td>'. $tableauClient[$pointeurClient][$col] .'</td>';
		}
		echo'</tr></table>';
	}
	
	//---------si c'est l'administrateur !-------------
	if(($drap == true) && ($nomUtil == "Administrateur")){
			 echo'<br><br><font size="5">Liste des clients</font><br><br><br><table border="1" width="80%">';
			 for($ligne = 0 ; $ligne < sizeof($tableauClient); $ligne++){
				echo'<tr>';
				for($col = 0 ; $col < sizeof($tableauClient[$ligne]); $col++){
					echo'<td>'. $tableauClient[$ligne][$col] .'</td>';
				}
				echo'</tr>';
			}
			echo'</tr></table></center>';			
			
		}
		
	//----------pas d'authentification----------
	else if(!$drap){echo' <center><font color="red"><b>Nom d\'utilisateur ou mot de passe incorrect !</b></font></center>';}
	echo'</div></body>';
	echo'</html>' ;
?>
