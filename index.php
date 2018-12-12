<html>

	<head>
	
		<meta-charset="utf-8"/>
	
	</head>

<body>
	
	<form method=post>
	
	
	<b> Veuillez saisir le code de sécurité : </b> <br>
	
	

<?php
session_start();
echo "<img src='script-captchas.php' alt='captchas' />";

	
//	if(isset($_REQUEST['envoyer']))
//	{
//		$captchas=$_RESQUEST;
//		if($captchas=="")
//		{
//			echo "Aucune valeur";
//		}
//		else
//		{
//			if($captchas==captchas)
//		{
//			echo "Code valide";
//		}
//		}
//	}
		
?>

	<br>
	<input type="text" name="text"> 
	<input type="submit" value="envoyer" name="envoyer">
	
</body>
	

</html>