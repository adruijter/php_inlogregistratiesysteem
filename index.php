<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>fotosjaak</title>
        <script src="developer/jquery/jquery-2.1.3.js"></script>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" media="screen" href="screenstyle.css">
        <script>
        $(document).ready(function(){
            //document.getElementById("testHeadAndBody").innerHTML = "Het is verandert";
        });  
            
        </script>
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