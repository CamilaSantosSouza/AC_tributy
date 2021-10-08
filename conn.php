<?php
	$conn=mysqli_connect("localhost", "root", "", "user_registration");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>