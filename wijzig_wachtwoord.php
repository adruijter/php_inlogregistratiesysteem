<?php
	$userrole = array("customer");
	require_once("./security.php");
	
	
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