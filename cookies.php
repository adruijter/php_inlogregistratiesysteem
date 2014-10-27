<?php 
	if (isset($_POST['submit']))
	{
		echo "We gaan iets doen (iets met cookies)";
		//var_dump($_POST);
		$cookie_name = "welkom";
		$cookie_value = "Hallo ".$_POST['voornaam']." "
								.$_POST['tussenvoegsel']." "
								.$_POST['achternaam'];
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	}
	else
	{		
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>
		<h3>Deze site maakt gebruik van cookies!</h3>			
		
		<form action='<?php	echo $_SERVER['SCRIPT_NAME']; ?>' method='post' >
			voornaam: <input type='text' name='voornaam' /><br>
			tussenvoegsel: <input type='text' name='tussenvoegsel' /><br>
			achternaam: <input type='text' name='achternaam' /><br>			
			<input type='submit' name='submit' value='verstuur' />
		</form>		
	</body>

</html>
<?php
	}
?>