
<?PHP
include_once "User.php";

$user = new User();
$data = $user->read();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>List of Users</h2>

  <div ><a href="create.php" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Create New User</a></div>
  <table class="table table-striped table-responsive">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $row) {
	?>
   <tr>
    <form name="userForm<?php echo $row['UserId']; ?>" role="form" method="POST" action="UserController.php">
    <input type="hidden" name="UserId" value="<?php echo $row['UserId']; ?>">
    <td><?php echo $row["FullName"] ?></td>
    <td><?php echo $row["Email"] ?></td>
    <td><?php echo $row["Gender"] ?></td>
  </form>
   </tr>

<?php
}?>
    </tbody>
  </table>
</div>

</body>
</html>
