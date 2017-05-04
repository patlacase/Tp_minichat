<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Mini-chat</title>
	</head>

	<style>
		
		form
		{
			text-align: center;
		}

	</style>

	<body>

		<!-- formulaire pour le pseudo et le message -->

		<form action="minichat_post.php" method="POST">
			<p>
				<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"  /><br />
			</p>
			
			<p>
				<label for="message">Message</label> : <input type="text" name="message" id="message"  /><br />
			</p>
			
			<input type="submit" name="Envoyer">
		</form>


		<?php
			//connexion à la bdd minichat

			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			}

			//en cas de problème on affiche l'erreur

			catch(Exception $e)
			{
				die('Erreur' . $e -> getMessage());
			}


	</body>
</html>