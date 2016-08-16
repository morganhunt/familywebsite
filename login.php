<?php include ('templateopen.php'); ?>

<div id="login">
	If you don't have the password, ask LeAnn for it.<br><br>
	<form method="post">
		Password:<br>
		<input type="password" name="password">
		<input type="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST) && isset($_POST["password"])){
			$checkthis = md5($_POST["password"]);
			$result = $conn->query("SELECT * FROM user");
			$user = $result->fetch_all(MYSQLI_ASSOC)[0];
			if ($checkthis == $user["password"]){
				$_SESSION["login"] = true;
			}
		}
		print_r($_SESSION);
	?>
</div>

<?php include ('templateclose.php'); ?>