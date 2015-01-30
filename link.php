<ul>
	<li><a href='index.php?content=algemeneHomepage'>home</a></li>
<?php
	if (isset($_SESSION['userrole']))
	{
		echo "<li><a href='index.php?content=logout'>uitloggen</a></li>";	
	}
	else
	{
	echo "
		
		<li><a href='index.php?content=register_form'>registreren</a></li>
		<li><a href='index.php?content=Login_form'>inloggen</a></li>";
	}
?>
</ul>