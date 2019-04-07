<html>
<head>
	<title>Dicoding Azure First Submission</title>

	<link rel="stylesheet" 
		  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
		  crossorigin="anonymous">

	<link rel="stylesheet" 
	      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" 
	      crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		    crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
			crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<form name="userForm" role="form" method="POST"  action="UserController.php">
				<h3 style="margin-bottom: 25px; text-align: center;">Add New User</h3>
				<div class="form-group">
					<label for="gender">Full Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
				</div>
				<div class="form-group">
					<label for="gender">Email Address</label>
					<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
				</div>
				<div class="form-group">
					<label for="gender">Select Gender</label>
					<select class="form-control" id="gender" name="gender">
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
				<div class="form-group">
				  <div class="col-md-12">
				    <button type="submit" id="submit"  name="create" class="btn btn-primary pull-right">Submit Form</button>
				    <a href="index.php" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
				  </div>
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>
