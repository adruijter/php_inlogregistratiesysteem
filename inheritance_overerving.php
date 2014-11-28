<?php
	include_once("./CarClass.php");
	include_once("./AmfibiewagenClass.php");
	include_once("./iInfo.php");
	
	
	$mercedes = new CarClass("Mercedes", "SLK 500S", "Diesel", "51-HB-ZP",
								"2004", "auto", 4, "Peeeeeep");
	
	$peppieEnKokkie = new AmfibiewagenClass("AmfibieWagen", 4, "Blub", "Groen", 2,
												0.8, 1400, 500);
												
	if ($peppieEnKokkie instanceOf iInfo)
	{
		$peppieEnKokkie->info();
	}
												
	//$peppieEnKokkie->Info();
	
	
	echo "<br>+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";
								
	$voertuig = new VoertuigClass("fiets", 3, "tring");
	$voertuig->Info();
	echo "<br>+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";
	$mercedes->Info();
	echo "<br>+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";
	$test = $voertuig;
	$test->Info();
	
?>

