<?php

    $servername = "localhost";
    $username = "rra_blok1_am1a";
    $password = "geheim";
    $databasename = "blok1-am1a"; 

    
    try
    {
        $connection = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                
        if (!empty($_POST))           
        {        
            $statement = $connection->prepare("INSERT INTO `products` (`id`, `photo_name`, `photo_description`, `photo_path`) VALUES (NULL, :photo_name, :photo_description, :photo_path)");
            $statement->bindParam(':photo_name', $_POST['photo_name']);
            $statement->bindParam(':photo_description', $_POST['photo_description']);
            $statement->bindParam(':photo_path', $_POST['photo_path']);

            $statement->execute();
        }
    }
    catch(PDOException $e)
    {
        echo "Dit is een PDO foutmelding, de volgende fout heeft plaatsgevonden: ".$e->getMessage();
    }
  
    echo "Het record is succesvol opgeslagen";
?>