<?php
    //require_once("http://localhost/2014-2015/fotosjaak.esy.es/config/config.php");
    // Haal gegevens uit de database en echo dit naar het scherm
    define('SERVERNAME', 'localhost');
        define('USERNAME', 'rra_blok1_am1a');   
        define('PASSWORD', 'geheim');
        define('DATABASENAME', 'blok1-am1a');
    try
    {
        
        $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DATABASENAME, USERNAME, PASSWORD);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $statement = $conn->prepare("SELECT `firstname`, `infix`, `lastname` FROM `users` WHERE  `id` = '94'");
        $statement->execute();
        
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        
        $data = "";
        foreach($statement->fetchAll() as $key => $value)
        {
            $data = $value['firstname']." ".$value['infix']." ".$value['lastname'];
        }    
        
    }
    catch(PDOException $e)
    {
        echo "Foutmelding: ". $e->getMessage();
    }

    //$data = "sdflkj";
    echo $data;
?>

