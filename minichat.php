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

		

		<form action="minichat_post.php" method="POST">
			<p>
				<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"  /><br />
			</p>
			
			<p>
				<label for="message">Message</label> : <input type="text" name="message" id="message"  /><br />
			</p>
			
			<input type="submit" name="Envoyer">
		</form>

	</body>
</html>