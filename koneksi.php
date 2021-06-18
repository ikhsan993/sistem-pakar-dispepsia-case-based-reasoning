<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "dispepsia";
	
	$kon = mysqli_connect($host, $user, $pass, $db);
	
	if(mysqli_connect_error()){
		echo "Failed";
		mysqli_connect_error();
	}
?>