<?php
	
	$username = 'root';
	$password = '';
	$database = 'mylisting';
	$server = '127.0.0.1';

	$conn = new mysqli($server, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	// echo "Connected successfully";


?>