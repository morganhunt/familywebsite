<?php session_start(); ?>
<?php 
if($_SESSION["login"] != true){
	header('Location: login.php?url=admin.php');
	die();
}

include('templateopen.php'); 
if($_SESSION["login"] == true):
?>
	
	<div id="content">
		<p>This is where the ADMIN content goes.</p>
		<h2>Upload Contacts</h2>

		<h2> Upload Special Days</h2>
	</div>

<?php
endif;


include('templateclose.php'); ?>