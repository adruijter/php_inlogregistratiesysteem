<?php
	// Voeg de class definitie in.
	include_once("AutoClass.php");
	
	// Maak twee objecten van de class AutoClass
	$auto1 = new AutoClass("Mercedes", "SLK 500", 4, "benzine", "81-UY-PZ", 2018);
	$auto2 = new AutoClass("Fiat", "500", 3, "diesel", "56-HK-TY", 2020);
	
	// Stop in dit array AutoClass objecten
	$autoArray = array();
	$autoArray[] = new AutoClass("Mercedes", "SLK 500", 4, "benzine",
									"81-UY-PZ", 2018);
	$autoArray[] = new AutoClass("Fiat", "500", 3, "diesel", "56-HK-TY", 2020);
	$autoArray[] = new AutoClass("Ford", "Mondeo", 5, "benzine", "51-HB-ZP", 2003);
	
?>
<h3>Werken met de constructor</h3>
<?php 
	// Roep de method showInfoAuto() aan.
	echo $auto1->showInfoAuto(); 
	echo $auto2->showInfoAuto();
	
	// Geef de info over de auto's in $autoArray weer door een foreach loop
	foreach ($autoArray as $auto)
	{
		$auto->showInfoAuto();
	}
?>
