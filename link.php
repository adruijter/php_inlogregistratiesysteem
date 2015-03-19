<ul>
	<li><a href='index.php?content=algemeneHomepage'>home</a></li>
<?php
	if (isset($_SESSION['userrole']))
	{
		echo "<li><a href='index.php?content=logout'>uitloggen</a></li>";
		switch ($_SESSION['userrole'])
		{
			case "developer":
				echo "<li>
						<a href='index.php?content=developer/arrays'>
							tutorial array
						</a>
					  </li>
					  <li>
						<a href='index.php?content=developer/file_handling'>
							file handling
						</a>
					  </li>					  
					  <li><h5>CSS</h5></li>
					  <li>
						<ul>
							<li>
								<a href='index.php?
										content=developer/css/syntax'>
									syntax
								</a>
							</li>
							<li>
								<a href='index.php?content=developer/css/selectors'>
									selectors
								</a>
							</li>
							<li>
								<a href='index.php?content=developer/css/howto'>
									howto
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/background'>
									background
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/csslink'>
									link
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/text'>
									text
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/font'>
									font
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/table'>
									table
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/boxmodel'>
									boxmodel
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/outline'>
									outline
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/margin'>
									margin
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/padding'>
									padding
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/dimensions'>
									dimensions
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/display'>
									display
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/positioning'>
									positioning
								</a>
							</li>
                            <li>
								<a href='index.php?content=developer/css/z-index'>
									z-index
								</a>
							</li>
						</ul					  
					  </li>";
			break;
			case "administrator":
				echo "<li><a href=''></a></li>";
			break;
			case "root":
				echo "<li><a href=''></a></li>";
			break;
			case "customer":
				echo "<li><a href='index.php?content=wijzig_wachtwoord'>wijzig wachtwoord</a></li>";
			break;
			case "photographer":
				echo "<li><a href=''></a></li>";
			break;
		}
	}
	else
	{
	echo "
		
		<li><a href='index.php?content=register_form'>registreren</a></li>
		<li><a href='index.php?content=Login_form'>inloggen</a></li>";
	}
?>
</ul>