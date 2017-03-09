<?php
$db_connect = mysqli_connect("localhost", "formfitdata", "Du4ld1m3ns10ns", "formfit_users");
//check if connection error
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
	exit();
}

	
?>