<?php
	session_start();
	require_once 'conn.php';

	$email = $_POST['email'];
	$password = $_POST['password'];
	$hash = password_hash($password, PASSWORD_DEFAULT);
 
	$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' && `password`='$hash'");
	if (mysqli_num_rows($query) == 0) {
		echo "Login inválido!";
	} else {
		header ('Location:main.php');
	} 
?>