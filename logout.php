/****************************************************************************************/
/*
/* FILE NAME: logout.php
/*
/* DESCRIPTION: Code for handling user logout.
/*
/*   DATE      BY       DESCRIPTION
/* ========   ======   =============
/* 4/1/2017 Sam Bowden  Created file before header initializations
/*
/****************************************************************************************/
<?php
session_start();
// Set Session data to an empty array
$_SESSION = array();
// Expire their cookie files
if(isset($_COOKIE["id"]) && isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
	setcookie("id", '', strtotime( '-5 days' ), '/');
    setcookie("user", '', strtotime( '-5 days' ), '/');
	setcookie("pass", '', strtotime( '-5 days' ), '/');
}
// Destroy the session variables
session_destroy();
// Double check to see if their sessions exists
if(isset($_SESSION['username'])){
	header("location: message.php?msg=Error:_Logout_Failed");
} else {
	header("location: http://www.formfitapp.com");
	exit();
} 
?>
