<?php


include 'bdd_connections.php';
if(!isset($_SESSION['login'])){
	header('location: logindb.php');
}

 $query = 
  '
    SELECT
      *
    FROM
      Event
    WHERE
      State=0
  ';
  $resultSet = $pdo->query($query);
  $evnts = $resultSet->fetchAll();
		


include 'event0.phtml';


		