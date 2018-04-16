<?php

$db_servername= "localhost";
$db_username= "root";
$db_password= "";
$db_name= "telemedicine";

$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
		//connection failed test
	if ($conn->connect_error) {
		 echo '<script type="text/javascript"> alert("Connection error"); </script>';
		die("Connection failed: " . $conn->connect_error);
	}
	
