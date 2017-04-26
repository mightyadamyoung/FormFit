<?php
include("../includes/check_login_status.php");
// If user is already logged in, header them away
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
//update the country
if(isset($_POST["c"])){
	$c = $_POST["c"];
	if($c == ""){
		echo "update_failed";
		exit();
	} else {
	$sql = "UPDATE users SET country='$c' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($db_connect, $sql);
	echo $log_username;
	exit();
	
  }
  exit();
}

//update the password
if(isset($_POST["p2"])){
	$p = $_POST["p2"];
	$p_hash = md5($p);
	if($p_hash == ""){
		echo "update_failed";
		exit();
	} else {
	$sql = "UPDATE users SET password='$p_hash' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($db_connect, $sql);
	echo $log_username;
	exit();
	
  }
  exit();
}




//update the user settings
if(isset($_POST["w"])){
	$w = $_POST["w"];
	$b = $_POST["b"];
	$mb = $_POST["mb"];
	$ms = $_POST["ms"];
	$md = $_POST["md"];
	
	
	if($w == "" && $mb == "" && $ms == "" && $md == ""){
		echo "update_failed";
		exit();
	} else {
	
	$sql = "UPDATE users SET bio = '$b', website='$w', maxbench='$mb', maxsquat='$ms', maxdead='$md' WHERE username='$log_username' LIMIT 1";
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
	if(b == "" && w == "" && mb == "" && ms == "" && md == ""){
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
        ajax.send("b="+b+"&w="+w+"&mb="+mb+"&ms="+ms+"&md="+md);
        }
}
function UpdateC(){

	var c = _("country").value;
	if(c == ""){
		_("status2").innerHTML = "Fill out at least one option";
	} else {
		_("updatebtn").style.display = "none";
		_("status2").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "settings.php");
	        ajax.onreadystatechange = function() {
		        if(ajaxReturn(ajax) == true) {
		            if(ajax.responseText == "update_failed"){
						_("status2").innerHTML = "Update unsuccessful, please try again.";
						_("updatebtn").style.display = "block";
					} else {
						window.location = "user.php?u="+ajax.responseText;
					}
		        }
	        }
        ajax.send("c="+c);
        }
}
function UpdateP(){

	var p1 = _("pass1").value;
	var p2 = _("pass2").value;
	if(p1 == "" && p2 == ""){
		_("status3").innerHTML = "Fill out both options";
	}else if(p1 != p2){
		("status3").innerHTML = "Passwords do not match";
	} else {
		_("updatebtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "settings.php");
	        ajax.onreadystatechange = function() {
		        if(ajaxReturn(ajax) == true) {
		            if(ajax.responseText == "update_failed"){
						_("status3").innerHTML = "Update unsuccessful, please try again.";
						_("updatebtn").style.display = "block";
					} else {
						window.location = "user.php?u="+ajax.responseText;
					}
		        }
	        }
        ajax.send("p2="+p2);
        }
}
</script>

</head>
<body>
<?php include("nav.php"); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<div class="w3-container" style="margin-top:80px" id="showcase">
<div id="pageMiddle">
 <form name="settingsform" id="settingsform" onsubmit="return false;">
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
    <br /><br />
    <button id="updatebtn" onclick="Update()">Update</button>
    <span id="status"></span>
  </form>
  <hr>
  <form name ="countryform" id="countryform" onsubmit="return false;">
   <div>Country:</div>
    <select id="country" onfocus="emptyElement('status')">
      <?php include_once("../country_list.php"); ?>
    </select>
    <br /><br />
    <button id="updatebtn" onclick="UpdateC()">Update</button>
    <span id="status2"></span>
  </form>
  <hr>
  <form name ="passwordform" id="passwordform" onsubmit="return false;">
  <div>Update Password:</div>
   <input id="pass1" type="password" onfocus="emptyElement('status')" maxlength="16">
    <div>Confirm Password:</div>
    <input id="pass2" type="password" onfocus="emptyElement('status')" maxlength="16">
    <br /><br />
    <button id="updatebtn" onclick="UpdateP()">Update</button>
    <span id="status3"></span>
  </form>
</div>
</div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>