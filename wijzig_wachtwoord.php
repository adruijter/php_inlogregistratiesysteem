<?php
	$userrole = array("customer");
	require_once("./security.php");
	
	
	if (isset($_POST['submit']))
	{
		require_once("classes/LoginClass.php");
		
		if (LoginClass::check_old_password($_POST['oude_wachtwoord']))
		{
			echo "Goede wachtwoord";
		}
		else
		{
			echo "Uw heeft uw huidige wachtwoord verkeerd ingevoerd. Probeer het opnieuw";
			header("refresh:5;url=index.php?content=wijzig_wachtwoord");
		}
	}
	else
	{
?>
<p><h3>Wijzig uw wachtwoord</h3></p>
<form action='index.php?content=wijzig_wachtwoord' method='post'>
	
	Geef het oude wachtwoord:
	<input type='password' name='oude_wachtwoord' required><br>
	Geef het nieuwe wachtwoord:
	<input type='password' name='nieuw_wachtwoord' required><br>
	Geef nogmaals uw nieuwe wachtwoord:
	<input type='password' name='controle_wachtwoord' required><br>
	<input type='submit' name='submit' value='verzenden'>
</form>
<?php
	}
?>