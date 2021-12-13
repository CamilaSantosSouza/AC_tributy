<?php
	session_start();
	require_once 'conn.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' && `password`= PASSWORD('$password')");
	if (mysqli_num_rows($query) > 0) {
		header('Location:main.php'); 
	} if($email == "camilaadmin@gmail.com" || $email == "matheusadmin@gmail.com"){
		header('Location:Admin.php');
	} else {
		echo "Email ou senha incorreta";
	}

?>