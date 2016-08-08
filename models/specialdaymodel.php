<html>
<?php
	class SpecialDay{
		public $day;
		public $type;
		public $name;
		public $year;

		public function __construct ( $day=NULL, $type=NULL, $name=NULL, $year=NULL ){
			$this -> day = $day;
			$this -> type = $type;
			$this -> name = $name;
			$this -> year = $year;
		}

		public function getSpecialDays (){
			return array(
				new SpecialDay ( 'Jan 4', 'Birthday', 'Nichole Eck', '1990' ),
				new SpecialDay ( 'Jan 8', 'Birthday', 'LeAnn Hunt', '1963' )
			);
		}
	}
?>
</html>