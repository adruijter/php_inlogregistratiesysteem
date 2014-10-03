<?php
	// Met twee forwardslashes kun je commentaar in je code zetten
	/* Maar het kan ook met forwardslash sterretje */
	# Een hashtag kan ook maar wordt niet zo veel gebruikt
	
	echo "Hallo Wereld!<br>";
	//echo "Mijn naam is Arjan de Ruijter";
?>

<!-- Dit is wat HTML commentaar -->
<br>
<?php
	// Variabelen in PHP zijn case-sensitive
	// Variabelen tussen enkele quotes worden niet geparsed

	$voornaam = 'Arjan';
	$tussenVoegsel = 'de';
	$achternaam = "Ruijter";
	echo "Mijn voornaam is: $voornaam<br>";
	echo "Mijn tussenvoegsel is: ".$tussenVoegsel."<br>";
	echo "Mijn achternaam is: $achternaam<br>";
	
	$test = 3;
	$eerstegetal = 3;
	$tweedegetal = 16;
	$som = $eerstegetal + $tweedegetal;
	$verschil = $tweedegetal - $eerstegetal;
	$product = $eerstegetal * $tweedegetal;
	$quotient = $eerstegetal / $tweedegetal;
	echo "Wanneer ik ".$eerstegetal." optel bij $tweedegetal, dan is het goede antwoord ".$som."<br>";
	echo "Wanneer ik $eerstegetal aftrek van $tweedegetal, dan is uitkomst: $verschil<br>";
	echo "Wanneer ik ".$eerstegetal." deel door $tweedegetal, dan is uitkomst: $quotient<br>";
	echo "Wanneer ik $eerstegetal vermenigvuldig met $tweedegetal, dan is uitkomst: $product<br>";
	
	echo "<hr>";
	
	$automerk = "Volvo";
	$automerk1 = "Mercedes";
	$automerk2 = "Fiat";
	$automerk3 = "Lada";
	$automerk4 = "Toyota";
	
	var_dump($automerk);
	var_dump($automerk1);
	var_dump($automerk2);
	var_dump($automerk3);
	var_dump($automerk4);
	
	echo "<hr>";
	
	$test = 2;
	
	$automerken = array( $test => "volvo",
					    "duurste" => "Mercedes",
						"Fiat",
						"Lada",
						"Toyota");
	var_dump($automerken);
	echo $automerken[2];
	
	echo "<hr>";
	
	var_dump($_POST);
	
	echo "<hr>";

	echo "Uw voornaam is: ".$_POST['voornaam']." dat is uw naam!";
	
	$broodbeleg = "pindakaas";
	var_dump($broodbeleg);
	echo "Heeft de variabele broodbeleg de waarde null: ".is_null($broodbeleg);
	$broodbeleg = null;
	var_dump($broodbeleg);
	echo is_null($broodbeleg);
	
	echo "<hr>";
	echo "String functies<br>";
	echo strlen("Dit is een test of het wel werkt")."<br>";
	echo strpos("Dit is een test of het wel werkt", "een")."<br>";
	$str = addslashes('Hij riep "stop" tegen de leerling');
	echo $str;
	
	// Dit is een voorbeeld van de explode stringfunctie
	$str = "Ik ga nu een lange zin maken die niet zo veel inhoud heeft maar wel veel woorden bevat.";
	$explode_voorbeeld = explode(" ", $str);
	var_dump($explode_voorbeeld);
	
	// Dit is een voorbeeld van de implode stringfunctie
	$str = implode(" ", $explode_voorbeeld)."<br>";
	echo $str;
	
	echo "<hr>";
	// Voorbeeld van een MD5 hash
	
	echo $_POST["password"]."<br> ";
	$md5hash = Md5($_POST["password"]);
	echo $md5hash."<br>";
	$wachtwoord = "geheim";
	$md5hash2 = Md5($wachtwoord);
	echo "De uitkomst van het vergelijken van de wachtwoorden is: ".strcmp($md5hash, $md5hash2);
	
	echo "<hr>";
	echo "Het definieren van een constante<br>";
	Define("PI", 3.1415);
	Define("SERVER_NAME", "bruinbroodje");
	Define("DATABASE_NAME", "theKing");
	
	echo "Het getal PI is: ".PI."<br>";
	echo "De servernaam is: ".SERVER_NAME."<br>";
	echo "De databasenaam is: ".DATABASE_NAME."<br>";
?>






