<?php

	include 'bdd_connections.php';


//Envoi des données de réservation


       if(isset($_POST['Nom']))
        {  
        $query =
        '
            INSERT INTO
                booking
                (Event_Id, Nom, Prenom, Tel, Dtn, Email, Details, State)
            VALUES
                (?, ?, ?, ?, ?, ?, ?, ?)
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['Event_Id'], $_POST['Nom'], $_POST['Prenom'], $_POST['Tel'], $_POST['Dtn'], $_POST['Email'], $_POST['Details'], $_POST['State']]);

header('Location: index.php');
    
}

//Affichage de l'atelier


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
        WHERE
            Id = ?
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['id']]);
    $event = $resultSet->fetch();



	include 'single-atelier.phtml';