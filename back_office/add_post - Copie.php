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
      Post
    WHERE
      PostState=1
    ORDER BY ID DESC
    LIMIT 3
  ';
  $resultSet = $pdo->query($query);
  $apost = $resultSet->fetchAll();
		

    if(isset($_POST['Title']))
        {  
        $query =
        '
            INSERT INTO
                Post
                (Title, Content, CreationTimeStamp, Author, Image, PostState)
            VALUES
                (?, ?, NOW(), ?, ?, ?)
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['Title'], $_POST['Content'], $_POST['Author'], $_POST['Image'], $_POST['PostState']]);
 
       
    header('Location: add_post.php');
        exit();
}


include 'add_post.phtml';
