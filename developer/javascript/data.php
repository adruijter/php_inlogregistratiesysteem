<?php
    // Haal gegevens uit de database en echo dit naar het scherm
    $servername = "localhost";
    $username = "rra_blok1_am1a";
    $password = "geheim";
    $databasename = "blok1-am1a";

    try
    {
        $connection = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $statement = $connection->prepare("SELECT `id`, `firstname`, `infix`, `lastname` FROM `users` WHERE `id` = :id");
        $statement->bindParam(':id', $id);
        
        $id = $_POST['id'];
        
        $statement->execute();
        
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        
        $data = "";
        foreach($statement->fetchAll() as $key => $value)
        {
            $data .= $value['id']." | ".$value['firstname']." | ".$value['infix']." | ".$value['lastname']."<br>";
        }        
    }
    catch(PDOException $e)
    {
        echo "Dit is een PDO foutmelding, de volgende fout heeft plaatsgevonden: ".$e->getMessage();
    }


    //$data = $_POST['id']." - Arjan de Ruijter is mijn naam, mobiel: ".$_POST['telefoon'];
    echo $data;
?>

