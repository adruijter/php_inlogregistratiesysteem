<?php ob_start(); ?>
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
				echo "Dit is een test voor het gebruik van request: ".
						$_REQUEST['achternaam']."<br>";
				var_dump($_REQUEST);
				session_start();
				$_SESSION['voornaam'] = $_POST['voornaam'];
				$_SESSION['tussenvoegsel'] = $_POST['tussenvoegsel'];
				$_SESSION['achternaam'] = $_POST['achternaam'];
				$_SESSION['zomaar'] = "Dit is even een test";
				var_dump($_SESSION);
				
				echo "De ingevulde naam is: ".$_POST['voornaam']."<br>";
				
				move_uploaded_file($_FILES['selfie']['tmp_name'],
				"c:/wamp/www/2014-2015/inlogregistratiesysteem/images");
				
				
				echo "<img src='images/".$_FILES['selfie']['name']."' alt='dit is een plaatjes' width='200'/>";
				
				echo $_SERVER["HTTP_ORIGIN"].$_SERVER["PHP_SELF"]."<br>";
				echo "De formuliergegevens worden verstuurd van IP-adres: ".
						$_SERVER["SERVER_ADDR"];
				echo "<a href='session_test.php'>volgende pagina</a>";
				var_dump($_FILES);
			}
			else
			{
		?>		
		<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post' enctype='multipart/form-data' >
			voornaam: <input type='text' name='voornaam' /><br>
			tussenvoegsel: <input type='text' name='tussenvoegsel' /><br>
			achternaam: <input type='text' name='achternaam' /><br>
			foto: <input type='file' name='selfie' ><br>
				  <input type='submit' name='submit' value='verstuur' />		
		</form>
		
		
		<?php
			}
		?>
		
		
	</body>
</html>