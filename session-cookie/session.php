<?php 

	//connect with server session memonry
	session_start();

	//creating session variable 
	echo $_SESSION['name'];
	echo $_SESSION['age'];
	echo $_SESSION['mobile number'];
	echo $_SESSION['District'];

	//to destroy the session -
	session_destroy();

 ?>