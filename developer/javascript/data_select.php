<?php
    // Haal gegevens uit de database en echo dit naar het scherm
    $servername = "localhost";
    $username = "rra_blok1_am1a";
    $password = "geheim";
    $databasename = "blok1-am1a"; 

    if (isset($_POST['id']))
    {
        $id = $_POST['id'];
        $fields = "";
        $sql_extension = ' WHERE `id` = :id';
    }
    else
    {
        $id = '';
        $fields = "";
        $sql_extension = '';
    }

    try
    {
        $connection = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
        //$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT `id`, `firstname`, `infix`, `lastname` FROM `users`";
        $sql .= $sql_extension;
        
        $statement = $connection->prepare($sql);
        
        $statement->bindParam(':id', $id);
        
        //$id = $test;
         
        $statement->execute();
        
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        
        
        $data = '{ "records" : [';
        foreach($statement->fetchAll() as $key => $value)
        {
            $data .=  '{ "id" : "'.$value['id'];
            $data .=  '", "firstname" : "'.$value['firstname'];
            $data .=  '", "infix" : "'.$value['infix'];
            $data .=  '", "lastname" : "'.$value['lastname'];
            
            if ($key == $statement->rowCount() - 1)
            {
                $data .='"}]}';
            }
            else
            {
                $data .= '"}, ';
            }
        } 
        
    }
    catch(PDOException $e)
    {
        echo "Dit is een PDO foutmelding, de volgende fout heeft plaatsgevonden: ".$e->getMessage();
    }
    
    
    echo $data; 
?>

