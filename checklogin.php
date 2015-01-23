<?php
	require_once("classes/LoginClass.php");
	require_once("classes/SessionClass.php");

	
	if ( !empty($_POST['email']) && !empty($_POST['password']))
	{
		// Als email/password combi bestaat en geactiveerd....
		if (LoginClass::check_if_email_password_exists($_POST['email'], 
													   MD5($_POST['password']),
													   'yes'))
		{
			echo "Accountgegevens opvragen en in sessievariabelen opslaan";
			$session->login(LoginClass::find_login_by_email_password($_POST['email'], 														  MD5($_POST['password'])));
			
			switch ($_SESSION['userrole'])
			{
				case 'customer':
					header("location:customerHomepage.php");
					break;
				case 'administrator':
					header("location:administratorHomepage.php");
					break;
				case 'root':
					header("location:rootHomepage.php");
					break;
				case 'photographer':
					header("location:photographerHomepage.php");
					break;
				case 'developer':
					header("location:developerHomepage.php");
					break;
				default :
					header("location:login_form.php");			
			}
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