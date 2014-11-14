<?php
	// Maak contact met de database
	include('connect_db.php');
	
	if (!$connection)
	{
		echo "Er is een fout opgetreden bij het contact maken met de database-server<br>";
		header("refresh:5; url=mysqli.php");
	}
	else
	{	
		if (isset($_POST['submit']))
		{			
		    $voornaam = mysqli_real_escape_string($connection, $_POST['voornaam']);
			$tussenvoegsel = mysqli_real_escape_string
									($connection, $_POST['tussenvoegsel']);
			$achternaam = mysqli_real_escape_string($connection, $_POST['achternaam']);
			
			$sql = "INSERT INTO `user` (`id`,
										`voornaam`,
										`tussenvoegsel`,
										`achternaam`)
							VALUES	   (NULL,
										'".$voornaam."',
										'".$tussenvoegsel."',
										'".$achternaam."');";
			//echo $sql."<br>"; exit();
			
			$send = mysqli_query($connection, $sql);
			
			//var_dump($send);
			
			if (!$send)
			{
				echo "Uw ingevulde gegevens hebben ons niet bereikt. Probeer het<br>
					  later nog eens. Of mail naar info@test.com";
				header("refresh:5;url=mysqli.php");
			}
			else
			{
				echo "Uw ingevulde gegevens hebben ons bereikt. Dank voor het registreren";
				header("refresh:5;url=mysqli.php");
			}			
		}
		else
		{
			// Maak een query die alle velden uit de tabel user selecteert.
			$sql = "SELECT `id`,
						   `voornaam`,
						   `tussenvoegsel`,
						   `achternaam`
					FROM `user`";
					
			//echo $sql."<br>";
			
			// Vuur de query af op de database
			$result = mysqli_query($connection,$sql);
			
			
?>
			<!DOCTYPE html>
			<html>
				<head>
					<title>MySqli</title>
					<style>
						table, th, td
						{
							border:2px solid blue;
							border-collapse:collapse;
							padding:0.5em 1em;
						}			
					</style>
				</head>
				<body>
					<h3>Opslaan van gegevens in een database met mysqli</h3>
						<form action='mysqli.php' method='post' >
							voornaam:<input type='text' name='voornaam' /><br>			
							tussenvoegsel:	<input type='text' name='tussenvoegsel' /><br>		
							achternaam:	<input type='text' name='achternaam' /><br>		
							<input type='submit' name='submit' value='sla op in database' />
						</form>

						<hr>				
						
						<!-- Opdracht: Maak een tabel voor het weergeven van de velden
							 id, voornaam, tussenvoegsel, achternaam en zet er handmatig
							 drie namen in -->	
						
						
						
						<table>	
							<caption>Gebruikers uit database</caption>
							<tr>
								<th>id</th>
								<th>voornaam</th>
								<th>tussenvoegsel</th>
								<th>achternaam</th>
								<th></th>
								<th></th>
							</tr>
						<?php
						while ($record = mysqli_fetch_array($result))
						{
						  echo "<tr>
								 <td>".$record["id"]."</td>			 
								 <td>".$record["voornaam"]."</td>
								 <td>".$record["tussenvoegsel"]."</td>
								 <td>".$record["achternaam"]."</td>
								 <td>
								  <a href='update.php?
										id=".$record['id']."&
										voornaam=".$record['voornaam']."&
										tussenvoegsel=".$record['tussenvoegsel']."&
										achternaam=".$record['achternaam']."'>
										<img src='./images/edit.png' 
											 alt='potlood'/>
								  </a>
								 </td>
								 <td>
								  <a href='./drop.php?id=".$record['id']."'>
								    <img src='./images/drop.png' alt='kruisje' />
								  </a>
								 </td>
								</tr>";
						}
						?>
						</table>					
				</body>
			</html>
<?php
		}
	}
?>