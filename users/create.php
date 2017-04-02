/****************************************************************************************/
/*
/* FILE NAME: create.php
/*
/* DESCRIPTION: 
/*
/* REFERENCE:
/*
/*   DATE      BY       DESCRIPTION
/* ========   ======   =============
/* 4/1/2017 Sam Bowden  Created file before header initializations
/*
/****************************************************************************************/
<?php
include("../includes/check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok != true){
	header("location: ../index.php");
    exit();
    }
?>
<?php

if(isset($_POST["n"])){
	$n = $_POST["n"];
	$d = $_POST["d"];
	$m = $_POST["m"];
	
	if($n == "" || $d == "" || $m == ""){
		echo "update_failed";
		exit();
	} else {
	
	$sql = "INSERT INTO exercises (username, exname, descr, muscles, date) VALUES ('$log_username', '$n', '$d', '$m', now())";
	$query = mysqli_query($db_connect, $sql);
	exit();
	
  }
  exit();
	
}
?>
<?php include('meta.php'); ?>
<title><?php echo $log_username; ?> | Create an Exercise</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style type="text/css">
</style>
<script>
function emptyElement(x){
	_(x).innerHTML = "";
}
function  New(){

	var n = _("name").value;
	var d = _("desc").value;
	var m = _("muscles").value;
		if(n == "" || d == "" || m == ""){
		_("status").innerHTML = "Fill out all the options.";
	} else {
		_("newexbtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "create.php");
	        ajax.onreadystatechange = function() {
		        if(ajaxReturn(ajax) == true) {
		            if(ajax.responseText == "update_failed"){
						_("status").innerHTML = "Update unsuccessful, please try again.";
						_("newexbtn").style.display = "block";
					} else {
						window.location = "create_video.php";
					}
		        }
	        }
        ajax.send("n="+n+"&d="+d+"&m="+m);
        }
}

</script>
</head>
<body class="w3-theme-l5">
<?php include("nav.php"); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<div class="w3-container" style="margin-top:80px" id="showcase">
<div id="pageMiddle">
 <form name="newex" id="newex" onsubmit="return false;"> 
 <h2>Give your new exercise a name, description, and select the muscles worked!</h2>
    <div>Exercise Name: </div>
    <input id="name" type="text" maxlength="255">
    <div>Description:</div>
    <input id="desc" type="text"  maxlength="3000">
    <div>Muscles Worked:</div>
    <input id="muscles" type="text">
    <br /><br />
     <button id="newexbtn" onclick="New()">Next</button>
    <span id="status"></span>
  </form>
 
</div>
</div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>
