<!DOCTYPE html>
<html>
	<head>
		<title>functions</title>
	<head>
	<body>
		<h3>Functions</h3>
		
		<?php			
			function weergevenNaam($aantal=1,
								   $voornaam="Arjan",
								   $tussenvoegsel="de",
								   $achternaam="Ruijter")
			{
				for ($i=0; $i < $aantal; $i++)
				{
					echo "Mijn naam is ".$voornaam." ".
										 $tussenvoegsel." ".
										 $achternaam."<br>";
				}
			}
			
			function bereken($getal1=0, $getal2=0, $bewerking="+")
			{
				switch ($bewerking)
				{
					case "+":
						$uitkomst = $getal1 + $getal2;
						break;
					case "-":
						$uitkomst = $getal1 - $getal2;
						break;
					case "/":
						$uitkomst = $getal1 / $getal2;
						break;
					case "*":
						$uitkomst = $getal1 * $getal2;
						break;
					default:
						$uitkomst = "Geen bewerking meegegeven of bewerking niet bekend";
						break;
				}
				return "De uitkomst van $getal1 en $getal2 is: ".$uitkomst;
			}
			
		?>
		
		<hr>
		
		<?php
			weergevenNaam(1,"Arjan", "de", "Ruijter");
			weergevenNaam(2,"Bert", "de", "Vries");
			echo bereken(4,6, "-")."<br>";
			echo bereken(347, 3, "*")."<br>";
		?>
	
	<body>
</html>