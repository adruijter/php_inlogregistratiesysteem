<?php
	include_once("AutoClass.php");
	
	$auto1 = new AutoClass("Mercedes");
	
	$text = "Het merk is: ".$auto1->getMerk();
	
?>
<h3>Werken met de constructor</h3>
<?php echo $text; ?>
