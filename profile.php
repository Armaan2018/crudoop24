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
	<style type="text/css">
		.leftside {
	font-size: 25px;
	padding: 25px;
	color: aquamarine;
	font-weight: 900;
}
.righside {
	font-size: 25px;
	padding: 25px;
	color: #4b6c61;
	font-weight: 900;
}



	</style>
</head>
<body>
	
   


	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>My Profile</h2>



<?php 

    /*
          Fetch Data from Users

    */


          
   if (isset($_GET['id'])) {
   	$userid = (int)$_GET['id'];
   }


   $single = $user -> singleProfile($userid);
   $row    = mysqli_fetch_assoc($single);


 ?>



				<div class="prodiv">
					<ul style="list-style: none;">
						<li><span class="leftside">Name</span>:<span class="righside"><?php echo $row['name']; ?></span></li>
						<li><span class="leftside">Email</span>:<span class="righside"><?php echo $row['email']; ?></span></li>
						<li><span class="leftside">Cell</span>:<span class="righside"><?php echo $row['cell']; ?></span></li>
						<li><span class="leftside">Username</span>:<span class="righside"><?php echo $row['uname']; ?></span></li>



					</ul>

					<a class="btn btn-primary" href="editprofile.php?id=<?php echo $row['id']; ?>">Edit profile</a>

				</div>




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