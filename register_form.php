<?php
	if (isset($_POST['submit']))
	{
		require_once("./classes/LoginClass.php");
		if (LoginClass::check_if_email_exists($_POST['email']))
		{
			//Zo ja, geef een melding dat het emailadres bestaat en stuur
			//door naar register_form.php
			echo "Het door u gebruikte emailadres is al in gebruik.<br>
				  Gebruik een ander emailadres. U wordt doorgestuurd naar<br>
				  het registratieformulier";
			header("refresh:5;url=index.php?content=register_form");
		}
		else
		{
			LoginClass::insert_into_database($_POST);
		}
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
	<h3>Registratieformulier</h3>
		<form action='index.php?content=register_form' method='post'>
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