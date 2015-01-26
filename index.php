<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<?php include("header.php"); ?>
		</header>
		<aside>
			<ul>
				<li><a href='index.php?content=algemeneHomepage'>home</a></li>
				<li><a href='index.php?content=register_form'>registreren</a></li>
				<li><a href='index.php?content=Login_form'>inloggen</a></li>
				<li><a href='index.php?content=logout'>uitloggen</a></li>
			</ul>
		</aside>
		<section>
			<?php include("redirect.php"); ?>
		</section>		
		<footer>
			Dit is de footer van de webapplicatie
		</footer>	
	</body>
</html>