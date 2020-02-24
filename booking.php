<?php

    include 'bdd_connections.php';


    if(!isset($_SESSION['login'])){
    header('location: login.php');
}


       if(isset($_POST['Nom']))
        {  
        $query =
        '
            INSERT INTO
                booking
                (Nom, Prenom, Tel, Dtn, Email, Image)
            VALUES
                (?, ?, ?, ?, ?, ?)
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['Nom'], $_POST['Prenom'], $_POST['Tel'], $_POST['Dtn'], $_POST['Email']]);

    
}


$query = 
    '
        SELECT
            Id,
            FirstName,
            LastName 
        FROM
            Author
    ';
    $resultSet = $pdo->query($query);
    $Author = $resultSet->fetchAll();

    $query = 
    '
        SELECT
            Id,
            Name
        FROM
            Category        
    ';
    $resultSet = $pdo->query($query);
    $Category = $resultSet->fetchAll();





include 'single-atelier.phtml';