<?php include_once "app/db.php"; ?>
<?php include_once "app/functions.php"; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php 


	/**
    * Destroy cookie for relogin
     */
    setcookie('login_user_id','', time() - (60*60*24*365*10) );



		/**
		 * logout system
		 */

		if (isset($_GET['logout']) AND $_GET['logout'] == 'success') {

			/**
			 * session destroy
			 */
			session_destroy();

			/**
			 * Redirect to index.php (login page)
			 */
			header("location:index.php");
		}

		/**
		 * Profile page access security
		 */

		if (!isset($_SESSION['id']) AND !isset($_SESSION['name']) AND !isset($_SESSION['email']) ) {
			header("location:index.php");
		}


	 ?>

	<div class="wrap shadow">

		<div class="card clearfix">

			<div class="card-header">Profile of - <?php echo $_SESSION['name']; ?><a class="btn btn-primary float-right" href="data.php">All Members</a></div>

			<div class="card-body">
				<img style="width: 200px; height: 200px; display: block; border-radius: 50%; border: 10px solid #fff; margin: 30px auto;" class="shadow" src="members/<?php echo $_SESSION['photo']; ?>" alt="Profile Photo">

				<table class="table table-striped">
					<tr>
						<td>Name</td>
						<td><?php echo $_SESSION['name']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email']; ?></td>
					</tr>
					<tr>
						<td>Cell</td>
						<td><?php echo $_SESSION['cell']; ?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><?php echo $_SESSION['username']; ?></td>
					</tr>
				</table>
			</div>
			<div class="card-footer">
				<a href="?logout=success">Logout</a>
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