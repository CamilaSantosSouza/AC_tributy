<?php
	session_start();
	require_once 'conn.php';

	$email = $_POST['email'];
	$password = preg_replace('/[^[:alnum:]_]/', '',$_POST['password']);
	$hash = password_hash($password, PASSWORD_DEFAULT);
 
	$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' && `password`='$hash'");
	if (mysqli_num_rows($query) > 1) {
		echo "Login inválido!"; 
		exit;
	} else {
		header("Location:main.php");
	} 
?>