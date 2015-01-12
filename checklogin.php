<?php
	require_once("classes/LoginClass.php");

	if ( !empty($_POST['email']) && !empty($_POST['password']))
	{
		// Als email/password combi bestaat en geactiveerd....
		if (LoginClass::check_if_email_password_exists($_POST['email'],$_POST['password']))
		{
			echo "Accountgegevens opvragen en in sessievariabelen opslaan";
		}
		else
		{
			echo "Melden aan gebruiker dat email/password combi niet bestaat of dat 
				  het account niet is geactiveerd.";
		}	
	}
	else
	{
		echo "U heeft een van beide velden niet ingevuld, u wordt doorgestuurd<br>
			  naar de inlogpagina.";
		header("refresh:5;url=login_form.php");
	}
?>