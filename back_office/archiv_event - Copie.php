<?php


include 'bdd_connections.php';
if(!isset($_SESSION['login'])){
    header('location: logindb.php');
}

 $query = 
  '
    UPDATE
      Event
    SET State = 0
      
    WHERE
       
      Id= ?    
     
  ';
  $resultSet = $pdo->prepare($query);
  $resultSet->execute([$_GET['id']]);
  
        
header('Location: event0.php');

include 'event1.phtml';