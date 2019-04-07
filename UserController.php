<?php
include_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$user = new User();
	if (isset($_POST['create'])) {

		//set the member values of user instance
		$user->setFullName($_POST["name"]);
		$user->setEmail($_POST["email"]);
		$user->setGender($_POST["gender"]);
		$user->create();

	} else {
		echo "Please Fill the Form. ";
	}
}

?>