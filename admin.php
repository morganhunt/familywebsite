<?php include('templateopen.php'); 


if($_SESSION["login"] == true):
?>
	
	<div id="content">
		<p>This is where the ADMIN content goes.</p>
		<h2>Upload Contacts</h2>

		<h2> Upload Special Days</h2>
	</div>

<?php
endif;
if($_SESSION["login"] != true){
	echo "You need to login before you can view this page.";
}

include('templateclose.php'); ?>