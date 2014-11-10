<?php
	if (isset($_POST['submit']))
	{
		include('connect_db.php');
		
		$sql= "UPDATE	`user` 
			   SET 		`voornaam`		=  '".$_POST['voornaam']."',
						`tussenvoegsel`	= 'test',
						`achternaam`	= 'test'
			   WHERE	`id`			= 1;";
		
		$result = mysqli_query($connection, $sql);
		
		echo "Uw wijziging is verwerkt. 
				U wordt doorgestuurd naar de vorige pagina"; 
		
		header("refresh:4;url=mysqli.php");
		/* Maak contact met de mysqlserver en database
		 * maak een updatequery
		 * stuur de gebruiker weer terug naar de pagina mysqli.php met
		 * header(refresh). Geef de gebruiker nog een melding dat het
		 * updaten is gelukt
		 */
	}
	else
	{
?>
<h3>Wijzig de gegevens</h3>
<form action='update.php' method='post' />
	voornaam:	<input type="text"
					   name="voornaam" 
					   value='<?php echo $_GET['voornaam']; ?>' /><br>
	tussenvoegsel: <input type="text"
					   name="tussenvoegsel" 
					   value='<?php echo $_GET['tussenvoegsel']; ?>' /><br>
	achternaam:	<input type="text" 
					   name="achternaam" 
					   value='<?php echo $_GET['achternaam']; ?>' /><br>
				<input type="submit" name="submit" />
</form>
<?php
	}
?>