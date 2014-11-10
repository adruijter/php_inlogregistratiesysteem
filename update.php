<?php

?>
<h3>Wijzig de gegevens</h3>
<form action='' method='post' />
	voornaam:	<input type="text"
					   name="voornaam" 
					   value='<?php echo $_GET['voornaam']; ?>' /><br>
	tussenvoegsel: <input type="text"
					   name="tussenvoegsel" 
					   value='<?php echo $_GET['tussenvoegsel']; ?>' /><br>
	achternaam:	<input type="text" 
					   name="achternaam" 
					   value='<?php echo $_GET['achternaam']; ?>' /><br>
				<input type="submit" name="submit" />
</form>