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

	$conn->select_db("familywebsitedb");



	class HouseholdModel{
		public $id;
		public $title;
		public $anniversary;
		public $street;
		public $zip;
		public $city;
		public $state;
		public $imgurl;

		public function __construct($id, $title, $anniversary, $street, $zip, $city, $state, $imgurl){
			$this -> id = $id;
			$this -> title = $title;
			$this -> anniversary = $anniversary;
			$this -> street = $street;
			$this -> zip = $zip;
			$this -> city = $city;
			$this -> state = $state;
			$this -> imgurl = $imgurl;
		}

		public static function getHouseholds(){
			global $conn;
			$result = $conn->query("SELECT * FROM household order by household.id");

			if($result){
				//print_r($result->fetch_all(MYSQLI_ASSOC));
				return $result;
			}
			else{
				return NULL;
			}
		}

		public static function getByID($id){
			global $conn;
			$result = $conn->query("SELECT * FROM household where household.id = ".$id);
			if($result){
				return ($result->fetch_all(MYSQLI_ASSOC)[0]);
			}
			else{
				return NULL;
			}
		}
	}




	class PersonModel{
		public $id;
		public $householdid;
		public $name;
		public $birthday;

		public function __construct($id, $householdid, $name, $birthday){
			$this -> id = $id;
			$this -> householdid = $householdid;
			$this -> name = $name;
			$this -> birthday = $birthday;
		}
	}




	class AttachmentModel{
		public $id;
		public $personid;
		public $iconurl;
		public $linkurl;
		public $displaytext;
		public $priority;

		public function __construct($id, $personid, $iconurl, $linkurl, $displaytext, $priority){
			$this -> id = $id;
			$this -> personid = $personid;
			$this -> iconurl = $iconurl;
			$this -> linkurl = $linkurl;
			$this -> displaytext = $displaytext;
			$this -> priority = $priority;
		}
	}

?>