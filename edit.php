 <?php

include_once "User.php";

if (!isset($_SESSION)) {
	session_start();
}

$data = "";
if (isset($_SESSION["user_id"])) {
	$user = new User();
	$data = $user->selectUser($_SESSION["user_id"]);

} else {
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
 <html>
<head>
	<title>CRUD Using PHP PDO</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="col-md-6 col-md-offset-3"><!--offset-md-3 bootstrap 4 -->

			<form name="userForm" role="form" method="POST" action="UserController.php">

				<h3 style="margin-bottom: 25px; text-align: center;">UPDATE using PHP PDO</h3>

				 <input type="hidden" name="user_id" value="<?PHP echo $data['user_id']; ?>">
				<div class="form-group">
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $data['name']; ?>"   required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control"  id="email" name="email" value="<?php echo $data['email']; ?>" placeholder="Email" required>
				</div>
				<div class="form-group">
					<label for="gender">Select Gender</label>
					<select class="form-control" id="gender" name="gender">
						<option>--Select--</option>
						<?php
$option1 = "<option>Male</option>";
$option2 = "<option>Female</option>";
if ($data['gender'] == "Male") {
	$option1 = "<option selected>Male</option>";
} else {
	$option2 = "option selected>Female</option>";
}
echo $option1;
echo $option2;
?>



					</select>
				</div>
				

				<button type="submit" id="update"  name="update" class="btn btn-primary pull-right">Update</button>
			</form>

		</div>


	</div>
<?php
session_destroy();
?>
</body>
</html>
