
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Login System</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

	<div class="conatiner">
		<h1 style="text-align: center;" class="text-center">Session and Cookies</h1>


		<p style="text-align: center; font-size: 20px;" class="text-center">go to cookie.php and see the cookie result</p>


	

<?php 


	//create cookie
	setcookie('testCookie1','This is test cookie',time() + 60*60*24*365*7);


	setcookie('testCookie2','This is test cookie setup 2',time() + 20);

	//destroy cookie- 

	setcookie('testCookie1','',time() - 60*60*24*365*7);



	//connect with server session memonry
	session_start();

	//creating session variable 
	$_SESSION['name'] = "Ashraf Uddin";
	$_SESSION['age'] = "32";
	$_SESSION['mobile number'] = "123456789";
	$_SESSION['District'] = "Madaripur";




 ?>

 <p style="text-align: center; font-size: 20px;" class="text-center">go to session.php and see the session result</p>

 </div>

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>

