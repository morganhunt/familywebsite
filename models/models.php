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

		public static function getByHousehold($householdid){
			global $conn;
			$result = $conn->query("SELECT * FROM person where person.householdid = ".$householdid);
			if($result){
				return ($result->fetch_all(MYSQLI_ASSOC));
			}
			else{
				return NULL;
			}
		}

		public static function getSpecialDays(){
			global $conn;
			$resultBDay = $conn->query("SELECT name, birthday FROM person");
			if($resultBDay){
				$birthdays = $resultBDay->fetch_all(MYSQLI_ASSOC);
				$resultAnniv = $conn->query("SELECT title, anniversary FROM household where household.anniversary IS NOT NULL");
				if($resultAnniv){
					$anniversaries = $resultAnniv->fetch_all(MYSQLI_ASSOC);
					$specialdays = array_merge($birthdays, $anniversaries);
					return $specialdays;
				}
				else{
					return NULL;
				}
			}
			else{
				return NULL;
			}
		}

		public static function getMonth($day){
			$date = isset($day['birthday'])
			? $day['birthday']
			: $day['anniversary'];
			return substr($date, 5, 2);
		}

		public static function getDay($day){
			$date = isset($day['birthday'])
			? $day['birthday']
			: $day['anniversary'];
			return substr($date, 8, 2);
		}

		public static function getYear($day){
			$date = isset($day['birthday'])
			? $day['birthday']
			: $day['anniversary'];
			return substr($date, 0, 4);
		}

		public static function makeDate($day){
			$date = isset($day['birthday'])
			? date_create($day['birthday'])
			: date_create($day['anniversary']);
			return $date;
		}
		public static function getDate($day){
			$date = isset($day['birthday'])
			? $day['birthday']
			: $day['anniversary'];
			return $date;
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

		public static function getByPerson($personid){
			global $conn;
			$result = $conn->query("SELECT * FROM attachment where attachment.personid = ".$personid);
			if($result){
				return ($result->fetch_all(MYSQLI_ASSOC));
			}
			else{
				return NULL;
			}
		}
	}

?>







