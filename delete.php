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

       if (isset($_GET['id'])) {
       	   $del_id = (int)$_GET['id'];
       }

 $del_user = $user -> deleteUser($del_id);




 ?>


 <a class="btn btn-primary" href="index.php">Home</a>









	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>