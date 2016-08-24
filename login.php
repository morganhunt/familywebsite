<?php session_start();
include_once ('models/models.php'); ?>
<?php
	if(isset($_POST) && isset($_POST["password"])){
		$checkthis = md5($_POST["password"]);
		$result = $conn->query("SELECT * FROM user");
		$user = $result->fetch_all(MYSQLI_ASSOC)[0];
		if ($checkthis == $user["password"]){
			$_SESSION["login"] = true;
			if(isset($_GET['url'])){
				header('Location: '.$_GET['url']);
				die();
			}
		}
	}
?>


<?php include ('templateopen.php'); ?>

<div id="content">
	If you don't have the password, ask LeAnn for it.<br><br>
	<form method="post">
		Password:<br>
		<input type="password" name="password">
		<input type="submit" value="Submit">
	</form>
</div>

<?php include ('templateclose.php'); ?>