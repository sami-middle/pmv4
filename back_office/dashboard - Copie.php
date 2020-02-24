<?php


include 'bdd_connections.php';
if(!isset($_SESSION['login'])){
	header('location: logindb.php');
}

 $query = 
  '
    SELECT
      Booking.Id,
      Event_Id,
      Nom,
      Prenom,
      Tel,
      Dtn,
      Email,
      Details,
      Booking.State,
      Theme,
      Date_hour,
      Image,
      Max_places,
      Places_nbr,
      Price,
      Event.State
    FROM
      Booking, Event
    WHERE
      Event.Id=Booking.Event_Id
    
  ';
  $resultSet = $pdo->query($query);
  $resas = $resultSet->fetchAll();
		

      $query =
    '
        SELECT
            COUNT(*) as nbr
        FROM
            Booking
        WHERE
           State= 1
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute();
    $nbr_b1 = $resultSet->fetch();

    //récupération du nombre d'évennements
     $query =
    '
        SELECT
            COUNT(*) as evs
        FROM
            Event
        WHERE
           State= 1
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute();
    $evs_ec = $resultSet->fetch();



    $query =
    '
        SELECT SUM(Price) as total

        FROM Event,Booking  
        
        where

        Event.Id=Booking.Event_Id 

        and Booking.State=1
    ';
  $resultSet = $pdo->query($query);
  $somme = $resultSet->fetch();




include 'dashboard.phtml';


		