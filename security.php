<?php
	session_start();	
	
	if ( !isset( $_SESSION['id']))
	{
		echo "U bent niet ingelogd en daarom niet bevoegd om deze pagina te bekijken. U wordt teruggestuurd naar de loginpagina.";
		header("refresh:5;url=login_form.php");
		exit();
	}
	else if ( !($_SESSION['userrole'] == $userrole) )
	{
		echo "U bent niet gemachtigd (te weinig rechten) en daarom niet bevoegd om deze pagina te bekijken. U wordt teruggestuurd naar de loginpagina.";
		header("refresh:5;url=".$_SESSION['userrole']."Homepage.php");
		exit();	
	}
	?>