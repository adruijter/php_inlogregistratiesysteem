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
        /*
        $statement = $connection->prepare("SELECT `id`, `firstname`, `infix`, `lastname` FROM `users` WHERE `id` = :id AND `lastname` = :lastname");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':lastname', $lastname);
        
        $id = $_POST['id'];
        $lastname = $_POST['lastname'];
        */
        
        $statement = $connection->prepare("SELECT `id`, `firstname`, `infix`, `lastname` FROM `users`");
              
        $statement->execute();
        
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        
        $data = '{ "namen" : [';
        foreach($statement->fetchAll() as $key => $value)
        {
            $data .=  '{ "id" : "'.$value['id'].'", "firstname" : "'.$value['firstname'].'", "infix" : "'.$value['infix'].'", "lastname" : "'.$value['lastname'].'"}, ';
        }
        $data .= '{ "id" : "", "firstname" : "", "infix" : "", "lastname" : ""}]}';
    }
    catch(PDOException $e)
    {
        echo "Dit is een PDO foutmelding, de volgende fout heeft plaatsgevonden: ".$e->getMessage();
    }


    //$data = $_POST['id']." - Arjan de Ruijter is mijn naam, mobiel: ".$_POST['telefoon'];
    echo $data;
?>

