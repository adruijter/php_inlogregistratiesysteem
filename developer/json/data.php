<?php
    /*
    $_GET['id'] = 94;
    $query = "SELECT `firstname`, `infix`, `lastname`
              FROM `users`
              WHERE `id` = '".$_GET['id']."'";

    $db_connection = mysqli_connect('localhost', 'rra_blok1_am1a', 'geheim', 'blok1-am1a');
    $result = mysqli_query($db_connection, $query);
	
    $text = "";
    while($record = mysql_fetch_array($result))
    {
        $text .= $record['firstname']. " " .$record['infix']." ".$record['lastname'];
    }
    echo $text;
    */
    $jsonString = '{"voornaam" : "Arjan", "tussenvoegsel" : "de", "achternaam" : "Ruijter"}';
    //echo $_GET["id"];
    echo $jsonString;
?>
