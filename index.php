<?php include_once 'app/autoload.php' ?>

<?php 


$user = new User;

 ?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
         <?php 

           if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $cell = $_POST['cell'];
              $uname = $_POST['uname'];

              $reg = $user -> registerUser($name,$email,$cell,$uname);
           }







         ?>


	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">

				<a class="btn btn-primary block" href="table.php">ALL USERS</a>
				<h2>Sign Up</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" name="submit" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>