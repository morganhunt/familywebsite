<?php include('templateopen.php'); ?>
	
	<div id="content">
		<form action="getfile.php" method="post" enctype="multipart/form-data"><br>
			Select File: <input type='file' name='uploadFile'>
			<br><input type='submit' value='Upload File'>
		</form>

		<?php
			//$dir = '/familywebsite/recipes/';
			foreach (glob("recipes/*.pdf") as $filename){
				$file = substr($filename, 8);
				echo '<a href="'.$filename.'" target="_blank">'.substr($file, 0, -4).'</a><br>';
			}
		?>
	</div>

<?php include('templateclose.php'); ?>