<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<p>This shows up before the php.</p>
	<?php
		print("\"I can't even!\"");
		include('templateopen.php');
		include('templateclose.php');
	?>
</body>
</html>