<html>
<?php include ('models/specialdaymodel.php'); ?>

<?php
	class SpecialDayController{
		

		public function invoke(){
			date_default_timezone_set('America/Phoenix');
			$model = new SpecialDay;
			$specialDays = $model -> getSpecialDays();
			$currYear = date('Y');
			include('templateopen.php');
			include('views/specialdayview.php');
			include('templateclose.php');
		}

		public function incrementYear(){

		}
	}
?>
</html>