<?php
	include_once("CarClass.php");
	
	$mercedes = new CarClass("Mercedes", "SLK 500S", "Diesel", "51-HB-ZP",
								"2004", "auto", 4, "Peeeeeep");
								
	$voertuig = new VoertuigClass("fiets", 3, "tring");
	$voertuig->Info();
	echo "<br>+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";
	$mercedes->Info();
	echo "<br>+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br>";
	$test = $voertuig;
	$test->Info();
	
?>