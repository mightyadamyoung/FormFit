<?php
$db_connect = mysqli_connect("localhost", "yourdatabase", "yourpasss", "yourdbname");
//check if connection error
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
	exit();
}

	
?>