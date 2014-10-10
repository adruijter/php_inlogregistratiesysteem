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
			
			function modulo($getal1, $modulo)
			{
				for ( $i=0; $i <= $getal1; $i++)
				{
					$uitkomst = $i % $modulo;
					echo $i." % ".$modulo." = ".$uitkomst."<br>";				
				}			
			}
			
			function moduloReturn($getal1, $modulo)
			{
				$returnWaarde = "";
				for ( $i=0; $i <= $getal1; $i++)
				{
					$uitkomst = $i % $modulo;
					$returnWaarde .= $i." % ".$modulo." = ".$uitkomst."<br>";				
				}
				return $returnWaarde;
			}
			
			$watTekst = "Dit is wat tekst";
			function scope($tekst)
			{
				//global $watTekst;
				echo "De uitkomst van het experiment staat hier: ".$tekst;			
			}
			
			scope($watTekst);
			
			
			/* Call by Value */
			
			function callByValue($a)
			{
				$a++;
			}
			
			$a = 5;
			callByValue($a);
			echo "Uitkomst call by value: ".$a;
			
			/* Call by Reference */
			
			function callByReference(&$a)
			{
				$a++;
			}
			
			$a = 5;
			callByReference($a);
			echo "Uitkomst call by value: ".$a;
			
		?>
		
		<hr>
		
		<?php
			weergevenNaam(1,"Arjan", "de", "Ruijter");
			weergevenNaam(2,"Bert", "de", "Vries");
			echo bereken(4,6, "-")."<br>";
			echo bereken(347, 3, "*")."<br>";
			modulo(10,5);
			echo moduloReturn(10,5);
		?>
	
	<body>
</html>