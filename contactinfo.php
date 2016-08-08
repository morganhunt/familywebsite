<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
		include('controllers/contact.php');
		$controller = new ContactController;
		$controller -> invoke();
	?>
</body>
</html>