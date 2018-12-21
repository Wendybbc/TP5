<!--CAPTCHAS RETRAVAILLE AU CALME, MAIS JE N'AI PAS REUSSI A AFFICHER LES RESULTATS...-->

<html>

	<head>

		<meta-charset="utf-8">
		<link rel="stylesheet" href="captchas.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	</head>

<body>

	<form method=post action="index.php">

<center><fieldset class="contour">

	<div class="phrase"> Veuillez saisir le code de sécurité : </div>


<?php
session_start();


		if(isset($_REQUEST['envoyer']))
		{
				$captchas=$_REQUEST['captchas'];

					if($captchas=="")

						{
							echo "Le code de sécurité doit être impérativement saisi";
						}

					else

					{
							if($captchas==$_SESSION['code'])

								{
									echo "Code de sécurité valide";
								}

							else

								{
									echo "Code sécurité invalide";
								}
					}
			}

			else

			{
				echo "<img src='script-captchas.php' alt='captchas' />";
			}

?>

	<br>
	<input type="text" name="captchas">
	<input type="submit" value="Valider le formulaire" name="captchas" class="captchas">

</fieldset>/<center>

</body>


</html>
