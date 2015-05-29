<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>fotosjaak</title>
        <script src="developer/jquery/jquery-2.1.3.js"></script>
        <script src="developer/jqueryui/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="developer/jqueryui/jquery-ui-1.11.4.custom/jquery-ui.css">
        <link rel="stylesheet" media="screen" href="screenstyle.css">        
	</head>
	<body>
		<header>
			<?php include("header.php"); ?>
		</header>
        <section>
			<?php include("redirect.php"); ?>
		</section>	
		<aside>
			<?php include("link.php"); ?>
		</aside>
			
		<footer>
			<?php include("footer.php"); ?>
		</footer>	
	</body>
</html>