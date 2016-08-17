<?php session_start(); ?>
<?php
	include ('templateopen.php');
	date_default_timezone_set('America/Phoenix');
	echo "<div id='content'>";


	$now = date('Y');
	echo $now;


	$specialdays = PersonModel::getSpecialDays();
	
	usort($specialdays, function ($a, $b) {
		return PersonModel::getMonth($a)*100 + PersonModel::getDay($a) - PersonModel::getMonth($b)*100 - PersonModel::getDay($b);
	});
	/*foreach($specialdays as $day){
		$date = PersonModel::makeDate($day);
		echo date("M j Y", $date->getTimeStamp())."<br>";
	}*/

	echo "<table id='specialdays'>";
	foreach($specialdays as $day){
		$date = PersonModel::makeDate($day);
		$year = PersonModel::getYear($day);
		$type = isset($day['birthday'])
			? "Birthday"
			: "Anniversary";
		$name = isset($day['name'])
			? $day['name']
			: $day['title'];
		echo "<tr><td>".date("M j", $date->getTimeStamp())."</td>";
		echo "<td>".($now-$year)."</td>";
		echo "<td>".$type."</td>";
		echo "<td>".$name."</td></tr>";
	}
	echo "</table>";


	echo "</div>";

	include ('templateclose.php');
?>

