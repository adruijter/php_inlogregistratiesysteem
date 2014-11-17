<?php
	require_once("AutoClass.php");

	$auto1 = new AutoClass();
	$auto2 = new AutoClass();
	
	$auto1->merk = "Fiat";
	$auto1->type = "Punto";
	$auto1->aantalWielen = 4;
	$auto1->brandstof = "diesel";
	$auto1->kenteken = "51-HB-ZP";
	$auto1->bouwjaar = "2002";
	
	$auto2->merk = "Mercedes";
	$auto2->type = "SLK 500";
	$auto2->aantalWielen = 2;
	$auto2->brandstof = "benzine";
	$auto2->kenteken = "52-IB-ZQ";
	$auto2->bouwjaar = "2018";
	
	
	$text = "Het object auto1 heeft de volgende kenmerken:<br>";
	$text .= "Merk: ".$auto1->merk."<br>";
	$text .= "Type: ".$auto1->type."<br>";
	$text .= "Aantal wielen aan de auto: ".$auto1->aantalWielen."<br>";
	$text .= "Brandstof: ".$auto1->brandstof."<br>";
	$text .= "Kenteken: ".$auto1->kenteken."<br>";
	$text .= "Bouwjaar: ".$auto1->bouwjaar."<br>";
	$text .= "+++++++++++++++++++++++++++++++++++++++++++++++<br>";
	
	$text2 = "Het object auto1 heeft de volgende kenmerken:<br>";
	$text2 .= "Merk: ".$auto2->merk."<br>";
	$text2 .= "Type: ".$auto2->type."<br>";
	$text2 .= "Aantal wielen aan de auto: ".$auto2->aantalWielen."<br>";
	$text2 .= "Brandstof: ".$auto2->brandstof."<br>";
	$text2 .= "Kenteken: ".$auto2->kenteken."<br>";
	$text2 .= "Bouwjaar: ".$auto2->bouwjaar."<br>";
	$text2 .= "+++++++++++++++++++++++++++++++++++++++++++++++";
?>
<h3>Werken met class</h3>
<?php echo $text.$text2; ?>
