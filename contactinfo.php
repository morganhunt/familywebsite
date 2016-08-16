<?php session_start(); ?>
<?php
	include('controllers/contact.php');
	$controller = new ContactController;
	$controller -> invoke();
?>