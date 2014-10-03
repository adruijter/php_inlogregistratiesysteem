<!DOCTYPE html>
<html>
	<head>
		<title>while loops</title>
	</head>
	<body>
		<h3>While Loops</h3>
		
		<?php
			$i = 6;
			
			while ($i >= 0)
			{
				echo '<h'.$i.'>De waarde van $i is: '.$i.'</h'.$i.'>';
				//$i = $i + 1;
				//$i += 1;
				$i--;
			}
		?>
	</body>
</html>