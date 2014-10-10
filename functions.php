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
			
			/* Maak een functie met de naam modulo. Deze functie heeft twee argumenten. De eerste '$getal1' is een getal tussen 0 en 100. Het tweede getal '$modulo' is een getal tussen 0 en 5.
			Gebruik in de functie een for-loop (bereik 0 t/m $getal1) en echo de uitkomst van $getal1 % $modulo naar het scherm.
			modulo(5, 2)
			0 % 2 = 0
			1 % 2 = 1
			2 % 2 = 0
			3 % 2 = 1
			4 % 2 = 0
			5 % 2 = 1
			
			*/
			
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