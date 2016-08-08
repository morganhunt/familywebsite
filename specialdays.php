<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
		include('controllers/specialday.php');
		$controller = new SpecialDayController;
		$controller -> invoke();
	?>
</body>
</html>