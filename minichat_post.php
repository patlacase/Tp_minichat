<?php

	//connexion à la bdd

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	}

	//en cas de problème on affiche les erreurs

	catch (Exception $e)
	{
		die ('Erreur' . $e -> getMessage());
	}

	//insertion d'un message grâce à une requête préparée

	$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES (?, ?)');

	$req->execute(array($_POST['pseudo'], $_POST['message']));

	//redirection du visiteur vers la page minichat.php

	header('Location: minichat.php');

?>