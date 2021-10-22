<?php
    require_once'conn.php';

    $username=$_POST['username'];
    $email=$_POST['email'];
	$password=$_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $res = mysqli_query($conn, "INSERT INTO `users`(`username`, `email`, `password`) VALUES('$username', '$email', '$hash')");
    header("location: index.php");
?>