<?php 

	$dbhost = 'localhost';
	$dbuser = 'greentree';
	$dbpass = 'chalani78#';
	$dbname = 'userdb'; 

	$connection = mysqli_connect('localhost', 'greentree', 'chalani78#', 'userdb');

	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	} else {
		echo "success";
	}

?>