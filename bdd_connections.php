<?php

session_start();

	//connexion à la base de données
	$pdo = new PDO
	(
		'mysql:host=localhost;dbname=projetmontessori;charset=UTF8',
		'root',
		'',
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]
	);




















































?>
