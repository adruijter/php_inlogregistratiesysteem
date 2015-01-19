<?php
	require_once("./classes/SessionClass.php");
	
	$session->logout();
	
	header("location:login_form.php");
?>