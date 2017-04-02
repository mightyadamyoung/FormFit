/****************************************************************************************/
/*
/* FILE NAME: settings.php
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

$sql = "SELECT * FROM users WHERE username='$log_username' AND activated='1' LIMIT 1";
$user_query = mysqli_query($db_connect, $sql);

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$country = $row["country"];
	$b = $row['bio'];
	$w = $row["website"];
	$mb = $row["maxbench"];
	$md = $row["maxdead"];
	$ms = $row["maxsquat"];
}




if(isset($_POST["w"])){
	$w = $_POST["w"];
	$b = $_POST["b"];
	$mb = $_POST["mb"];
	$ms = $_POST["ms"];
	$md = $_POST["md"];
	$c = $_POST["c"];
	
	if(w == "" && mb == "" && ms == "" && md == "" && c == ""){
		echo "update_failed";
		exit();
	} else {
	
	$sql = "UPDATE users SET bio = '$b', website='$w', maxbench='$mb', maxsquat='$ms', maxdead='$md', country='$c' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($db_connect, $sql);
	echo $log_username;
	exit();
	
  }
  exit();
	
}
?>
<?php include('meta.php'); ?>
<body class="w3-theme-l5">
<title><?php echo $log_username; ?> Settings</title>
<script>
function emptyElement(x){
	_(x).innerHTML = "";
}
function Update(){

	var w = _("website").value;
	var b = _("bio").value;
	var mb = _("mb").value;
	var ms = _("ms").value;
	var md = _("md").value;
	var c = _("country").value;
	if(b == "" && w == "" && mb == "" && ms == "" && md == "" && c == ""){
		_("status").innerHTML = "Fill out at least one option";
	} else {
		_("updatebtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "settings.php");
	        ajax.onreadystatechange = function() {
		        if(ajaxReturn(ajax) == true) {
		            if(ajax.responseText == "update_failed"){
						_("status").innerHTML = "Update unsuccessful, please try again.";
						_("updatebtn").style.display = "block";
					} else {
						window.location = "user.php?u="+ajax.responseText;
					}
		        }
	        }
        ajax.send("b="+b+"&w="+w+"&mb="+mb+"&ms="+ms+"&md="+md+"&c="+c);
        }
}
</script>

</head>
<body>
<?php include_once("../header.php.php"); ?>
<?php include("nav.php"); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<div class="w3-container" style="margin-top:80px" id="showcase">
<div id="pageMiddle">
 <form name="signupform" id="signupform" onsubmit="return false;">
    <div>Bio:</div>
    <input id ="bio" type="textarea" maxlength="1000" value="<?php echo $b ?>" width="30" height="60">
    <div>Website: </div>
    <input id="website" type="text" maxlength="255" value="<?php echo $w ?>" >
    <div>Max Bench:</div>
    <input id="mb" type="text" onfocus="emptyElement('status')" value="<?php echo $mb ?>" maxlength="4">
    <div>Max Squat</div>
    <input id="ms" type="text" onfocus="emptyElement('status')" value="<?php echo $ms ?>" maxlength="4">
    <div>Max Deadlift</div>
    <input id="md" type="text" onfocus="emptyElement('status')" value="<?php echo $md ?>" maxlength="4">
    <div>Country:</div>
    <select id="country" onfocus="emptyElement('status')">
      <?php echo $c ?>
      <?php include_once("../country_list.php"); ?>
    </select>
    <br /><br />
    <button id="updatebtn" onclick="Update()">Update</button>
    <span id="status"></span>
  </form>
 
</div>
</div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>
