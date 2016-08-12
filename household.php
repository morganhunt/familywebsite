<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<?php
	//print_r($_GET);
	include('templateopen.php');


	if(isset($_GET['id'])){
		$household = HouseholdModel::getByID($_GET['id']);
		//print_r($household);
		// echo $household['title'];
		echo "<div id='household'>";
		echo "<h2>".$household['title']." Family</h2>";

		echo "<table><tr><td><img src='images/address.jpeg'></td>";
		echo "<td><p>".$household['street']."<br>";
		echo $household['city'].", ".$household['state']." ".$household['zip']."</p>";
		echo "</td></tr></table>";

		echo "</div>";




	}
	else{
		echo 'error';
	}


	include('templateclose.php');
?>
</html>