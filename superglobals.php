<!DOCTYPE html>
<html>
	<head>
		<title>SUPERGLOBALS</title>
	</head>
	<body>
		<h3>Superglobals</h3>
		Met een var_dump kunnen we de gehele inhoud van het array zien
		<?php
			var_dump($_SERVER);
			
			echo $_SERVER["PHP_SELF"];
		?>
		
		<hr>
		
		Probeer nu een element uit het array te tonen
		<?php
		$test = array("Hallo", "Dag", "Tot ziens");
		var_dump($test);
		
		echo $test[2];
		
		?>
		
		Maak een formulier met een textvak en een submit button. Gebruik $_SERVER["PHP_SELF"] voor de action.<br>
		
		
		<?php
			if (isset($_POST["submit"]))
			{
				echo "De ingevulde naam is: ".$_POST['name']."<br>";
				echo $_SERVER["HTTP_ORIGIN"].$_SERVER["PHP_SELF"]."<br>";
				echo "De formuliergegevens worden verstuurd van IP-adres: ".
						$_SERVER["SERVER_ADDR"];
				
			}
			else
			{
		?>		
		<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
			Naam: <input type='text' name='name' />
				  <input type='submit' name='submit' value='verstuur' />		
		</form>
		
		<?php
			}
		?>
		
		
	</body>
</html>