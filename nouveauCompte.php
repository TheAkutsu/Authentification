<?php 
	$tableauEnregistrement = array("nom","prénom","email","adresse","tel");
echo'	<html>
		<head>
		</head>
		<body>
			<table width="50%" border="1">
			<form action = "enregistrement.php" metho="GET">';
			for($i = 0 ; $i < sizeof($tableauEnregistrement); $i++)
				echo'<tr><td>'.$tableauEnregistrement[$i].'</td><td><input type="texte" name="'.$tableauEnregistrement[$i].'"></td></tr>';
			echo'<input type="submit" value ="enregistrer"></form></table>
		</body>
	</html>';

?>