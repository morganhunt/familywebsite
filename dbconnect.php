
<?php
	$servername = "familywebsitedb.cczmur0bdurb.us-west-2.rds.amazonaws.com:3306";
	$username = "huntdevelopers";
	$password = "moc321www";

	//Create connection
	$conn = new mysqli($servername, $username, $password);

	//Check connection
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		echo "Connected successfully";
	}

	$conn->select_db("familywebsitedb");

	$result = $conn->query("SELECT * FROM household LEFT JOIN person on household.id = person.householdid");

	if($result){
		print_r($result->fetch_all(MYSQLI_ASSOC));
	}
	else{
		echo "fail".$conn->error;
	}
?>
