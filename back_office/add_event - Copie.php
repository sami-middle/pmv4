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
    ORDER BY ID DESC
    LIMIT 3
  ';
  $resultSet = $pdo->query($query);
  $evnts = $resultSet->fetchAll();
		

    if(isset($_POST['Theme']))
        {  
        $query =
        '
            INSERT INTO
                event
                (Theme, Content, Date_hour, Max_places, Price, Image, Places_nbr, State)
            VALUES
                (?, ?, ?, ?, ?, ?, ?, ?)
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['Theme'], $_POST['Content'], $_POST['Date_hour'], $_POST['Max_places'], $_POST['Price'], $_POST['Image'], $_POST['Places_nbr'], $_POST['State']]);
 
      

    header('Location: event1.php');
        exit();
}


include 'add_event.phtml';
