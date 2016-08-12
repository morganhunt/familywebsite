<html>
<?php
	include ('models/models.php');

	class HouseholdController{
		public function invokeHouseholds(){
			$HouseholdList = HouseholdModel::getHouseholds();
		}
	}

?>
</html>