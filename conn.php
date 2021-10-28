<?php
	/*$databaseHost = '127.0.0.1';//or localhost
	$databaseName = 'project'; // your db_name
	$databaseUsername = 'root'; // root by default for localhost 
	$databasePassword = '';  // by defualt empty for localhost*/
	
	$conn=mysqli_connect("localhost", "root", "", "user_registration");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>