<!DOCTYPE html>
<html>
	<head>
		<title>Switch case</title>
	</head>
	<body>
		<h3>Switch case controle structuur</h3>
				
		<?php
			if (isset($_POST['submit']))
			{
				// var_dump($_POST);
				$kleur = $_POST["kleur"];
				$getal = $_POST["getal"];
			
				// Switch case statement
				
				switch ( $getal )
				{
					case 1:
						echo "Het getal heeft de waarde 1<br>";
						break;
					case 2:
						echo "Het getal heeft de waarde 2<br>";
						break;
					case 3:
						echo "Het getal heeft de waarde 3<br>";
						break;
					case 4:
						echo "Het getal heeft de waarde 4<br>";
						break;
					default:
						echo "Uw favoriete getal zit er niet bij<br>";
						break;
				}
				
				switch ($kleur)
				{
					case "geel":
						echo "Uw favoriete kleur is geel!<br>";
						break;
					case "zwart":
						echo "Uw favoriete kleur is zwart!<br>";
						break;
					case "oranje":
						echo "Uw favoriete kleur is oranje!<br>";
						break;
					case "rood":
						echo "Uw favoriete kleur is rood!<br>";
						break;
					case "blauw":
						echo "Uw favoriete kleur is blauw!<br>";
						break;
					default:
						echo "Uw favoriete kleur zit er niet bij!<br>
							  Probeer het opnieuw<br>";
						break;
				}
				echo "<a href='switch_case.php'>terug</a>";				
			}
			else
			{
		?>		
			<form action="switch_case.php" method="post">
				<select name="kleur">
					<option value="default">-kies een kleur-</option>
					<option value="geel">geel</option>
					<option value="rood">rood</option>
				</select><br>
				<select name="getal">
					<option value="default">-kies een getal-</option>
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
				</select><br>
				<input type="submit" value="verstuur" name="submit" /><br>
			</form>
		<?php
			} // Dit is het sluithaakje van de else
		?>
	</body>
</html>