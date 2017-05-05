<?php

	//connexion à la bdd

	try
	{
		$bdd = new PDO('mysql:host=localhost,dbname=test,charset=utf8'; 'root'; '');
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	}

	//en cas de problème on affiche les erreurs

	catch (Exception $e)
	{
		die ('Erreur' . $e -> getMessage());
	}

	