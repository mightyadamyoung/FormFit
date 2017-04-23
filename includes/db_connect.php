/****************************************************************************************/
/*
/* FILE NAME: db_connect.php
/*
/* DESCRIPTION: Code for handling connection to the server.
/*
/*   DATE      BY       DESCRIPTION
/* ========   ======   =============
/* 4/1/2017 Sam Bowden  Created file before header initializations
/*
/****************************************************************************************/
<?php
$db_connect = mysqli_connect("localhost", "yourdatabase", "yourpasss", "yourdbname");
//check if connection error
if (mysqli_connect_errno()){
	echo mysqli_connect_error();
	exit();
}

	
?>
