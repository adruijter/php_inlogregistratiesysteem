<?php
	if (isset($_POST['submit']))
	{
		require_once("./classes/LoginClass.php");
		
		$tekst = "Er is op de submitknop gedrukt<br>";
		$tekst .= "De gegevens worden weggeschreven<br>";
		$tekst .= "naar de database.<br>";
		echo $tekst;
			
		LoginClass::insert_into_database($_POST);		
	}
	else
	{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>register</title>
	</head>
	<body>
	<h3>RegistratieVerfromulier</h3>
		<form action='./register_form.php' method='post'>
			voornaam: <input type='text' name='firstname' /><br>
			tussenvoegsel: <input type='text' name='infix' /><br>
			achternaam: <input type='text' name='lastname' /><br>
			email: <input type='email' name='email' /><br>
			<input type='submit' name='submit' />			
		</form>	
	</body>
</html>
<?php
	}
?>