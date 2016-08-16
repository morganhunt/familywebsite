<?php session_start(); ?>
<?php
	include('templateopen.php');

	/*include('controllers/household.php');
	$controller = new HouseholdController;
	$controller -> invokeHouseholds();*/
	$str = "wedobravethings";
	echo md5($str);

	include('templateclose.php');
?>