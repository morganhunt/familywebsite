<html>

<!-- HTML STUFF -->

<?php
	echo '<div id="content">';
	foreach ($contactList as $contact){
		echo '<br><br>'.$contact -> name;
		echo '<br>'.$contact -> address;
		echo '<br>'.$contact -> phone;
		echo '<br>'.$contact -> email;
		
	}
	echo '</div>';
?>
</html>