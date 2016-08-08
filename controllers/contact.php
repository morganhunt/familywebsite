<html>
<?php include ('models/contactmodel.php'); ?>

<?php
	class ContactController{
		public function invoke(){
			$model = new ContactModel;
			$contactList = $model -> getContactList();
			include('templateopen.php');
			include('views/contactview.php');
			include('templateclose.php');
		}
	}
?>
</html>










