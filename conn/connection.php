<?php  


	$host = "localhost";
	$user = "root";
	$pass = "";
	$base = "login";


	$conn = mysqli_connect($host, $user, $pass, $base);


	if ($conn->connect_error) {
		die('Connect Error: ' . $conn->connect_error);
	}
	


?>

