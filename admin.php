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
		<b>Updating the database</b><br>
		1. Open up Sequel Pro on your mac.<br>
		2. You should already have all the information entered in, so click connect and get started.<br>
		3. Select the table you want to edit, and go in and add/edit the entries in the table.<br><br>
		<b>List of Icon URLs for Attachments</b><br>
		<?php
			//$dir = '/familywebsite/recipes/';
			foreach (glob("images/*.png") as $filename){
				$file = substr($filename, 7);
				echo $file."<br>";
			}
		?>
	</div>

<?php
endif;


include('templateclose.php'); ?>