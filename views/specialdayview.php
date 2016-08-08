<html>

<!-- HTML STUFF -->

<?php
	echo '<div id="content">';
	date_default_timezone_set('America/Phoenix');
	echo '< '.$currYear.' >';
	$date = date_create("2016-07-27");
	echo '<br>'.date_format($date,"M j Y");
	foreach ($specialDays as $day){
		echo '<br><br>'.$day -> day;
		echo '--'.$day -> type;
		echo '--'.($currYear - $day -> year);
		echo '--'.$day -> name;
		
	}
	echo '</div>';
?>
</html>