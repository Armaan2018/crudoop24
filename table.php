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
	
	

	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>

				<a class="btn btn-primary" href="index.php">Add User</a>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>uname</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>


<?php 

    /*
          Fetch Data from Users table

    */


$show = $user -> showingUsers();
$i = 1;
while ($data = $show -> fetch_assoc()):







 ?>




						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['email']; ?></td>
							<td><?php echo $data['cell']; ?></td>
							<td><?php echo $data['uname']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="profile.php?id=<?php echo $data['id'];?>">View</a>
								<a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
							</td>
						</tr>
						
<?php endwhile; ?>
					</tbody>
				</table>
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