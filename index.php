<?php
echo'<html>
	<head>
	</head>
	<body>Veuillez vous authentifer !
		<form action="verification.php" method="GET">
			votre nom  <input type="text" name="nomUtil" value=""><br>
			votre email <input type="text" name="mdp"     value=""><br><br>
			<input type="submit" value="ok">
		</form>
		<form action="nouveauCompte.php" method="GET">
			<input type="submit" value="Nouveau Compte">
		</form>
	</body>
</html>';
?>