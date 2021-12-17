<?php

function getConnection(){
	// Create connection
	$con=mysqli_connect("127.0.0.1","alliana","ensf409","cpsc471_project");

	// Check connection
	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	return $con;
}


?>