<html>
<?php
	$target_dir = "adminuploads/";
	$target_file = $target_dir.basename($_FILES['uploadFile']['name']);
	$uploadOk = 1;
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

	//Make sure file already exists
	if(file_exists($target_file)){
		$uploadOk = 1;
	}
	else{
		echo 'Please name your file "contacts.php" or "specialdays.php" so the correct file can be updated.';
		$uploadOk = 0;
	}

	//Only allow PDFs
	if($fileType != "pdf"){
		echo "Sorry, only PDF files are allowed.";
		$uploadOk = 0;
	}

	//Check if file is above 500kb
	if($_FILES['uploadFile']['size'] > 500000){
		echo "Sorry, that file is too large to upload.";
		$uploadOk = 0;
	}

	//Check if there was an error
	if($uploadOk ==0){
		echo "Sorry, your file was not uploaded.";
	}
	//If there wasn't an error, try to upload the file.
	else{
		unlink("$target_file");
		move_uploaded_file($_FILES['uploadFile']['tmp_name'], $target_file);
		echo "The file ".basename($_FILES['uploadFile']['name'])." has been uploaded.";
	}

	echo "<a href='admin.php'> Return to Admin</a>";
?>
</html>