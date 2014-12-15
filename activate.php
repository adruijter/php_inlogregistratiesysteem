<?php
	require_once("./classes/LoginClass.php");
	
	echo "U bent op de activatiepagina. Het meegegeven id is: ".$_GET['id'];
	LoginClass::activate_account_by_id($_GET['id']);
?>