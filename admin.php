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
		<h2>Admin Directions for Mom</h2>
		<b>Updating the database</b>

	</div>

<?php
endif;


include('templateclose.php'); ?>