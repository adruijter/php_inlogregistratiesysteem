<?php
	include_once("AutoClass.php");
	
	$auto1 = new AutoClass("Mercedes", "SLK 500", 4, "benzine", "81-UY-PZ", 2018);
	
?>
<h3>Werken met de constructor</h3>
<?php echo $auto1->showInfoAuto(); ?>
