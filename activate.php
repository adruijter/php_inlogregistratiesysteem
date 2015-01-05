<?php
	require_once("./classes/LoginClass.php");
	if (isset($_POST['submit']))
	{
		// 1. Check of de twee ingevoerde passwords correct zijn.
		if ( !strcmp($_POST['password_1'], $_POST['password_2']))
		{		
			// 2. Update het oude password naar het nieuwe password.
			echo "Ze zijn gelijk";
			LoginClass::update_password($_POST['id'], $_POST['password_1']);			
		}
		else
		{
			echo "passwords komen niet overeen, probeer het nog een keer.";
			header("refresh:4;url=activate.php?id=".$_POST['id']);			
		}
	}
	else
	{
		
	
		LoginClass::activate_account_by_id($_GET['id']);
?>

<form  action="activate.php" method='post' >
	Type hier uw nieuwe wachtwoord <input type='password' name='password_1' /><br>
	type nogmaals uw wachtwoord (controle) <input type='password' name='password_2' /><br>
	<input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'/>
	<input type='submit' name='submit' />
</form>
<?php
	}
?>
