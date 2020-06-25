<?php include_once 'app/autoload.php' ?>

<?php 

//creating instance of User

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

/*

Get ID from the user

*/

   if (isset($_GET['id'])) {
   	$userid = (int)$_GET['id'];
   }

         

           if (isset($_POST['update'])) {

              $name = $_POST['name'];
              $email = $_POST['email'];
              $cell = $_POST['cell'];
              $uname = $_POST['uname'];

              /*
                     method for updating user
                   
              */              
              $reg = $user -> upadateUser($name,$email,$cell,$uname,$userid);



           }






         ?>


	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
<?php 

    /*
          Fetch Data from Users

    */

   $single = $user -> singleProfile($userid);
   $row    = mysqli_fetch_assoc($single);


 ?>



				<a class="btn btn-primary block" href="table.php">ALL USERS</a>
				<h2>Sign Up</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $userid; ?>" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php echo $row['name']; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $row['email']; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo $row['cell']; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" value="<?php echo $row['uname']; ?>" type="text">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" name="update" type="submit" value="Update">
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