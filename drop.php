<?php
	require("connect_db.php");
	
	// Maak je sql opdracht
	$sql = "DELETE FROM `user`
			WHERE `id` = '".$_GET['id']."'";
			
	//echo $sql; exit();
	
	$result = mysqli_query($connection, $sql);
	
	// Conditional operator (ternary operator) () ? :
	
	$yesOrNo = ($result) ? "" : "niet ";
	
	/*
	if ($result)
	{
		$yesOrNo = "";
	}
	else
	{
		$yesOrNo = "niet ";
	}
	*/
	echo "Het verwijderen is ".$yesOrNo."gelukt.<br>
		  U wordt doorgestuurd naar de vorige pagina";
		  header("refresh:5;url=mysqli.php");
	
	
?>