<?php session_start(); ?>
<?php
	include('controllers/specialday.php');
	$controller = new SpecialDayController;
	$controller -> invoke();
?>