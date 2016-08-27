<?php session_start(); ?>
<?php include('templateopen.php'); ?>
	
	<div id="content">
		<form id='recipieForm' action="getfile.php" method="post" enctype="multipart/form-data"><br>
			Upload Your Own Recipe: <br><input id='uploadbutton' type='file' name='uploadFile' onChange='document.getElementById("recipieForm").submit()'>
			<br><br><br>
		</form>

		<?php
			//$dir = '/familywebsite/recipes/';
			foreach (glob("recipes/*.pdf") as $filename){
				$file = substr($filename, 8);
				echo '<a id="recipe" href="'.$filename.'" target="_blank">'.substr($file, 0, -4).'</a><br>';
			}
		?>
	</div>

<?php include('templateclose.php'); ?>