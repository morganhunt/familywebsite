<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
		include('templateopen.php');

		include('controllers/household.php');
		$controller = new HouseholdController;
		$controller -> invokeHouseholds();

		include('templateclose.php');
	?>
</body>
</html>