<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" href="images/familylogo.png">
</head>
<body>
	<div id="header">
			<a href="index.php"><img src="images/familylogo.png"></a>
			<p><a href="FAQ.php">FAQ</a><br>
			<a href="login.php">Login</a><br>
			<a href="admin.php">Admin</a></p>
			<img id="headerimage" src="images/familyheader.png">
		</div>

		<div id="topnavigation">
			<table>
				<td>
					<a href="news.php"><h2>News</h2></a>
				</td>
				<td class="border">
					<p>|</p>
				</td>
				<td>
					<a href="calendar.php"><h2>Calendar</h2></a>
				</td>
				<td class="border">
					<p>|</p>
				</td>
				<td>
					<a href="familyhistory.php"><h2>Family History</h2></a>
				</td>
				<td class="border">
					<p>|</p>
				</td>
				<td>
					<a href="http://plex.tv" target="_blank"><h2>Movies</h2></a>
				</td>
				<td class="border">
					<p>|</p>
				</td>
				<td>
					<a href="externallink.php" target="_blank"><h2>Music</h2></a>
				</td>
				<td class="border">
					<p>|</p>
				</td>
				<td>
					<a href="http://darylleannhunt.zenfolio.com/" target="_blank"><h2>Photos</h2></a>
				</td>
				<td class="border">
					<p>|</p>
				</td>
				<td>
					<a href="recipes.php"><h2>Recipes</h2></a>
				</td>
				<td class="border">
					<p>|</p>
				</td>
				<td>
					<a href="specialdays.php"><h2>Special Days</h2></a>
				</td>
			</table>
		</div>

		<div class="page">
			<div id="sidebar">
				<?php
					include_once ('models/models.php');
					$HouseholdList = HouseholdModel::getHouseholds();
					echo "<ul>";
					foreach($HouseholdList as $household){
						echo "<li><a href='household.php?id=".$household['id']."'>";
						echo "<img src='".$household['imgurl']."'></a></li>";
					}
					echo "</ul>";
				?>
			</div>
