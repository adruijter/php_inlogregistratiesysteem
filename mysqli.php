<?php
	if (isset($_POST['submit']))
	{
		/*
		echo "Er is op de submitknop gedrukt en we gaan de gegevens opslaan in de database";
		*/
		// Definieer severname, usernaam, wachtwoord en databasenaam
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$databasename = 'blok1-am1a';
		
		// Maak contact met de server waarop de database draait.
		$connection = mysqli_connect($servername, $username, $password, $databasename);
		
		//var_dump($connection);
		
		if (!$connection)
		{
			echo "Er is een fout opgetreden bij het contact maken met de database-server<br>";
			header("refresh:5; url=mysqli.php");
		}
		else
		{
			$sql = "INSERT INTO `user` (`id`,
										`voornaam`,
										`tussenvoegsel`,
										`achternaam`)
							VALUES	   (NULL,
										'".$_POST['voornaam']."',
										'".$_POST['tussenvoegsel']."',
										'".$_POST['achternaam']."');";
			echo $sql."<br>";
			
			$send = mysqli_query($connection, $sql);
			var_dump($send);
			if (!$send)
			{
				echo "Uw ingevulde gegevens hebben ons niet bereikt. Probeer het<br>
					  later nog eens. Of mail naar info@test.com";
				header("refresh:5;url=mysqli.php");
			}
			else
			{
				
			}			
		}		
	}
	else
	{
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>MySqli</title>
		</head>
		<body>
			<h3>Opslaan van gegevens in een database met mysqli</h3>
				<form action='mysqli.php' method='post' >
					voornaam:<input type='text' name='voornaam' /><br>			
					tussenvoegsel:	<input type='text' name='tussenvoegsel' /><br>		
					achternaam:	<input type='text' name='achternaam' /><br>		
					<input type='submit' name='submit' value='sla op in database' />
				</form>	
		</body>
	</html>
<?php
	}
?>