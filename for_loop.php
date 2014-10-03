<!DOCTYPE html>
<html>
	<head>
		<title>for loop</title>
	</head>
	<body>
		<h3>for loop</h3>
		
		<?php
			for ($i = 1; $i <= 6; $i++)
			{
				echo "<h".$i.">Dit is een test voor een for loop,
							ronde: ".$i."</h".$i.">";			
			}			
		?>
		<hr>
		<!-- Zorg dat het h6 element bovenaan komt en het h1 element onderaan -->
		<?php
			for ($i = 6; $i > 0; $i--)
			{
				echo "<h".$i.">Dit is een test voor een for loop,
							ronde: ".$i."</h".$i.">";			
			}			
		?>
		<!-- schrijf alleen de even getallen 0, 2, 4, 6,..... op het scherm -->
		
		<!-- schrijf alleen de oneven getallen 1, 3, 5, 7,... op het scherm -->
		<hr>
		<h3>Even getallen van nul tot met twintig</h3>
		<?php
		for ($i = 0; $i ???; $i ???)
		{
			echo $i."<br>";			
		}
		?>
		


	</body>
</html>