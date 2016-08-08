<html>
<?php
	$target_dir = "recipes/";
	$target_file = $target_dir.basename($_FILES['uploadFile']['name']);
	$uploadOk = 1;
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

	//Check if file already exists
	if(file_exists($target_file)){
		echo "Sorry, that file already exists.";
		$uploadOk = 0;
	}

	//Check if file is above 500kb
	if($_FILES['uploadFile']['size'] > 500000){
		echo "Sorry, that file is too large to upload.";
		$uploadOk = 0;
	}

	//Only allow PDFs
	if($fileType != "pdf"){
		echo "Sorry, only PDF files are allowed.";
		$uploadOk = 0;
	}

	//Check if there was an error
	if($uploadOk ==0){
		echo "Sorry, your file was not uploaded.";
	}
	//If there wasn't an error, try to upload the file.
	else if(move_uploaded_file($_FILES['uploadFile']['tmp_name'], $target_file)){
		echo "The file ".basename($_FILES['uploadFile']['name'])." has been uploaded.";
	}
	else{
		echo "Sorry, there was an error uploading your file.";
	}

	echo "<a href='recipes.php'> Return to Recipes</a>";
?>
</html>