<?php
    require_once'conn.php';

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $res = mysqli_query($conn, "INSERT INTO `users`(`username`, `email`, `password`) VALUES('$username', '$email', PASSWORD('$password'))");
    
?>