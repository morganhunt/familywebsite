<?php session_start(); ?>
<?php
	if($_SESSION["login"] != true){
		if(isset($_GET['id'])){
			$link = "household.php?id=".$_GET['id'];
			header('Location: login.php?url='.urlencode($link));
			die();
		}
	}
?>
<?php
	//print_r($_GET);
	include('templateopen.php');

	if($_SESSION["login"] == true):
	if(isset($_GET['id'])){
		$household = HouseholdModel::getByID($_GET['id']);
		//print_r($household);
		// echo $household['title'];
		echo "<div id='household'>";
		echo "<h2>".$household['title'];
		if($household['anniversary'] != NULL){
			echo " Family";
		}
		echo "</h2>";


		echo "<div id='information'>";

		echo "<table><tr><td id='icon'><img src='images/address.jpeg'></td>";
		echo "<td><p>".$household['street']."<br>";
		echo $household['city'].", ".$household['state']." ".$household['zip']."</p>";
		echo "</td></tr></table>";
		


		//Time to get the people!
		$people = PersonModel::getByHousehold($_GET['id']);
		foreach($people as $person){
			echo "<h3>".$person['name']."</h3>";
			$attachments = AttachmentModel::getByPerson($person['id']);
			echo "<table>";
			foreach($attachments as $thing){
				echo "<tr><td id='icon'><img src='images/".$thing['iconurl']."'></td>";
				if($thing['linkurl'] != NULL){
					echo "<td><a id='lookalink' href='".$thing['linkurl']."' target='_blank'>".$thing['displaytext']."</a></td>";
				}
				else{
					echo "<td>".$thing['displaytext']."</td>";
				}
			}
			echo "</table>";
		}


		echo "</div>";
		echo "</div>";
	}
	else{
		echo 'error';
	}
	endif;


	include('templateclose.php');
?>