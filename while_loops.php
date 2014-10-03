<!DOCTYPE html>
<html>
	<head>
		<title>while loops</title>
	</head>
	<body>
		<h3>While Loop</h3>
		
		<?php
			$i = 6;			
			while ($i > 0)
			{
				echo '<h'.$i.'>De waarde van $i is: '.$i.'</h'.$i.'>';
				//$i = $i + 1;
				//$i += 1;
				$i--;
			}
		?>
		<hr>
		<h3>Do While Loop</h3>
		<?php
			$i = 6;
			do
			{
				echo '<h'.$i.'>De waarde van $i is: '.$i.'</h'.$i.'>';
				$i--;
			
			}while($i > 0)		
		?>
	</body>
</html>