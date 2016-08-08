<html>
<?php
	class ContactModel {
		require_once ('google-api-php-client-master/src/Google/autoload.php');
		session_start();
		$client = new Google_Client();
		$client->useApplicationDefaultCredentials();
		//Now use credentials to access the API service
		$client->setScopes(['https://www.googleapis.com/auth/contacts.readonly']);
		$service = new Google_Service_People($client);
		if($client == NULL){
			echo 'NOPE';
		}
		else{
			echo 'well i guess I got this far??';
		}




		public $name;
		public $address;
		public $phone;
		public $email;

		public function __construct ( $name = NULL, $address = NULL, $phone = NULL, $email = NULL ){
			$this -> name = $name;
			$this -> address = $address;
			$this -> phone = $phone;
			$this -> email = $email;
		}

		public function getContactList(){
			return array(
				'Morgan Hunt' => new ContactModel ('Morgan Hunt', '901 E San Remo Ave. Gilbert, AZ 85234', '(480)297-3194', 'to.morgan.hunt@gmail.com'),
				'LeAnn Hunt' => new ContactModel ('LeAnn Hunt', '901 E San Remo Ave. Gilbert, AZ 85234', '(480)216-5454', 'educ8r23@gmail.com')
			);
		}


	}
?>
</html>