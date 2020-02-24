<?php

	include 'bdd_connections.php';

	$query = 
	'
		SELECT
			Id,
			Theme,
			Content,
			Date_hour,
			Image,
			Max_places,
			Places_nbr,
			Price,
			State
		FROM
			event
		
	';
	$resultSet = $pdo->query($query);
	$events = $resultSet->fetchAll();

	include 'ateliers.phtml';