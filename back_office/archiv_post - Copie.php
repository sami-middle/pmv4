<?php


include 'bdd_connections.php';
if(!isset($_SESSION['login'])){
    header('location: logindb.php');
}

 $query = 
  '
    UPDATE
      Post
    SET PostState = 0
      
    WHERE
       
      Id= ?    
     
  ';
  $resultSet = $pdo->prepare($query);
  $resultSet->execute([$_GET['id']]);
  
        
header('Location: postdb0.php');

include 'postdb.phtml';