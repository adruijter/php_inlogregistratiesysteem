<h3>Conditional Statements</h3>
<h4>Het if statement</h4>
<?php
    // Probeer een if.. else if... else statement te maken die kan
    // melden of een getal tussen de 0 de 24, tussen de 25 en 49, tussen
    // 50 en 74 of tussen 75 en 100 zit.

    $teTestenGetal = 100;
    echo "Het te testen getal is: ".$teTestenGetal."<br>";

    if ( ($teTestenGetal >= 0) &&  ($teTestenGetal < 25 ))
    {
        echo "Het getal dat getest is zit tussen de 0 en de 24<br>";
    }
    else if ( ($teTestenGetal >= 25) AND ($teTestenGetal < 50))
    {
        echo "Het getal dat getest is zit tussen de 25 en de 49<br>";
    }
    else if ( ($teTestenGetal >= 50) AND ($teTestenGetal < 75))
    {
        echo "Het getal dat getest is zit tussen de 50 en de 74<br>";
    }
    else if ( ($teTestenGetal >= 75) AND ($teTestenGetal <= 100))
    {
        echo "Het getal dat getest is zit tussen de 75 en de 100<br>";
    }
    else if ( $teTestenGetal < 0 )
    {
        echo "Het te testen getal is kleiner dan 0";
    }
    else
    {
        echo "Het getal dat getest is groter dan 100<br>";
    }

?>