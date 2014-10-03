<!DOCTYPE html>
<html>
	<head>
		<title>operatoren</title>
	</head>
	<body>
		<h3>operatoren</h3>
		<?php
			$getal1 = 4;
			$getal2 = 6;
			
			$som = $getal1 + $getal2;
			$verschil = $getal1 - $getal2; 
			$macht = pow($getal1,$getal2);
			$modulo = $getal1 % $getal2;
			$product = $getal1 * $getal2;
			$quotient = $getal1 / $getal2;
			
			echo "De som van ".$getal1." en ".$getal2." is: ".$som."<br>";
			echo "Het verschil van ".$getal1." min ".$getal2." is gelijk aan: ".$verschil."<br>";
			echo $getal1." tot de macht ".$getal2." is gelijk aan: ".$macht."<br>";
			echo $getal1." modulo ".$getal2." is gelijk aan: ".$modulo."<br>";
			echo $getal1." maal ".$getal2." is gelijk aan: ".$product."<br>";
			echo $getal1." gedeeld door ".$getal2." is gelijk aan: ".$quotient."<br>";
		?>
		<h3>assignment operator / toekennings operator</h3>
		<?php
			// assignment operator
			$eenVariabele = 4;
			echo "De waarde van eenVariabele is: ".$eenVariabele."<br>";
			
			$andereVariabele = $eenVariabele;
			echo "De waarde van andereVariabele is: ".$andereVariabele."<br>";
			
			$eenVariabele = $eenVariabele + 5;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<br>";
			
			$eenVariabele += 5;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<hr>";
			
			$eenVariabele = 20;
			$eenVariabele = $eenVariabele - 10;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<br>";
			
			$eenVariabele = 20;
			$eenVariabele -= 10;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<hr>";
			
			$eenVariabele = 20;
			$eenVariabele = $eenVariabele * 10;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<br>";
			
			$eenVariabele = 20;
			$eenVariabele *= 10;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<hr>";
			
			$eenVariabele = 20;
			$eenVariabele = $eenVariabele / 4;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<br>";
			
			$eenVariabele = 20;
			$eenVariabele /= 4;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<hr>";
			
			$eenVariabele = 20;
			$eenVariabele = $eenVariabele % 3;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<br>";
			
			$eenVariabele = 20;
			$eenVariabele %= 3;
			echo "De waarde van eenVariabele is nu: ".$eenVariabele."<br>";
			
			$sql = "SELECT * FROM";
			$sql = $sql . " users";
			echo $sql;
			
			$sql = "SELECT * FROM";
			$sql .= " users";
			echo $sql;			
		?>
		
		<h3>Increment en decrement operatoren</h3>
		<?php
		$i = 2;
		echo 'De waarde van $i is: '.$i."<br>";
		$i = $i + 1;
		$i += 1;
		//Increment operator 
		$i++;
		echo 'De waarde van $i is: '.$i."<br>";
		++$i;
		echo 'De waarde van $i is: '.$i."<br>";
		
		// Decrement operator
		$i--;
		// is hetzelfde als $i = $i - 1
		echo 'De waarde van $i is: '.$i."<br>";
		
		?>
		<h3>Comparison operator of vergelijkingsoperator</h3>
		<?php
			$getal1 = 5;
			$getal2 = 5;
			echo "Bewering: ".$getal1." is gelijk aan ".$getal2.". Waar of niet? antw: "; var_dump($getal1 == $getal2);
			
			echo "Bewering: ".$getal1." is niet gelijk aan ".$getal2.". Waar of niet? antw: "; var_dump($getal1 != $getal2);
			
			echo "Bewering: ".$getal1." is groter dan ".$getal2.". Waar of niet? antw: "; var_dump($getal1 > $getal2);
			
			echo "Bewering: ".$getal1." is kleiner dan ".$getal2.". Waar of niet? antw: "; var_dump($getal1 < $getal2);
			
			echo "Bewering: ".$getal1." is groter of gelijk aan ".$getal2.". Waar of niet? antw: "; var_dump($getal1 >= $getal2);
			
			echo "Bewering: ".$getal1." is kleiner of gelijk aan ".$getal2.". Waar of niet? antw: "; var_dump($getal1 <= $getal2);
		?>
		
		<h3>Logisch operatoren</h3>
		<?php
			$bewering1 = (5 < 4);
			$bewering2 = (6 == 5);
			var_dump($bewering1 && $bewering2); //Alleen waar als beide waar 
			var_dump($bewering1 AND $bewering2); //Alleen waar als beide waar zijn
			
			var_dump($bewering1 || $bewering2); //Een bewering moet waar zijn om waar te zijn. Beiden beweringen moeten niet waar zijn om het geheel niet waar te maken.
			var_dump($bewering1 OR $bewering2); //Een bewering moet waar zijn om waar te zijn. Beiden beweringen moeten niet waar zijn om het geheel niet waar te maken.
			var_dump($bewering1 XOR $bewering2); //De bewering is waar als een van beide beweringen waar is maar niet alletwee.
			
			echo "Een uitroepteken maakt false weer true en true weer false"; var_dump(!(5 == 5));		
		?>
	</body>
</html>