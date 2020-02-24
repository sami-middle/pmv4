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
      event
    WHERE
      State=1
  ';
  $resultSet = $pdo->query($query);
  $evnts = $resultSet->fetchAll();
		


include 'event1.phtml';


		