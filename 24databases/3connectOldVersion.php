
<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (mysqli_connect_error()) {
		die("Database connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
?>