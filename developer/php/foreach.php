<h3>foreach</h3>

<?php
    $fruit = array("lekkerste" => "appel", "banaan", "mango", "guave", "druiven");
    //echo count($fruit);

    echo "Ik eet graag ";
    for ( $i=0; $i<count($fruit)-1; $i++)
    {		
        if ( $i == count($fruit) - 1 )
        {
            echo $fruit[$i].".";
        }
        else
        {
            echo $fruit[$i].", ";
        }
    }
?>

<hr>

<?php
    foreach($fruit as $index => $value)
    {
        echo $value." heeft als index: ".$index."<br>";
    }
?>