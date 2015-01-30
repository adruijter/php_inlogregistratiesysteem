<?php
	session_start();
	if (isset($_SESSION))
	{
		echo "<ul>
				<li><a href='index.php?content=logout'>uitloggen</a></li>
			  </ul>";	
	}
	echo "
	<ul>
		<li><a href='index.php?content=algemeneHomepage'>home</a></li>
		<li><a href='index.php?content=register_form'>registreren</a></li>
		<li><a href='index.php?content=Login_form'>inloggen</a></li>
	</ul>";
?>