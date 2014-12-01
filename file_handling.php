<?php
require("./classes/FileInfoClass.php");

echo "De onderstaande tekst is opgevraag uit een bestand met readfile()<br>";
echo readfile("./testFile.txt");
echo"<br>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";

echo 'De onderstaande tekst is opgevraag uit een bestand met fopen()<br>';
$testFile = fopen("./testFile.txt", "r") or Die("Kan het bestand niet openen");
$text = fread($testFile, filesize("./testFile.txt"));

echo nl2br($text);
echo "Het aantal woorden in deze string is".str_word_count($text);

echo "<br>=======================================================================<br>";

$file = new FileInfoClass("./testFile.txt");
$file->Info();

?>
<br>
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>
De class moet ook een method hebben die als argument een tekst meekrijgt. De
method geeft dan aan hoevaak de tekst is gevonden.