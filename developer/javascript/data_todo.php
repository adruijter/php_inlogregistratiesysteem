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
           /*
            $statement = $connection->prepare("INSERT INTO `userstoetself` (`id`, `item`) VALUES (NULL, :todo)");
            $statement->bindParam(':todo', $_POST['todo']);

            $statement->execute();
            
            */
            
            $statement2 = $connection->prepare("SELECT * FROM `userstoetself` WHERE `id` < 2");
            
            $statement2->execute();
            
            $result = $statement2->setFetchMode(PDO::FETCH_ASSOC);        
        
            $data = '{ "records" : [';
            foreach($statement2->fetchAll() as $key => $value)
            {
                $data .=  '{ "id" : "'.$value['id'];
                $data .=  '", "item" : "'.$value['item'];

                if ($key == $statement2->rowCount() - 1)
                {
                    $data .='"}]}';
                }
                else
                {
                    $data .= '"}, ';
                }
            }
            echo $data;
        }
    }
    catch(PDOException $e)
    {
        echo "Dit is een PDO foutmelding, de volgende fout heeft plaatsgevonden: ".$e->getMessage();
    }    
?>