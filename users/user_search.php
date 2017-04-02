/****************************************************************************************/
/*
/* FILE NAME: user_search.php
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
	
?>


<?php  

$u = "";
$w = "";
$mb ="0";
$ms ="0";
$md ="0";
$c ="";

if(isset($_POST["search"])){
	$s = $_POST["search"];

	
	if($s == ""){
		echo "update_failed";
		exit();
	} else {
	
	$sql = "SELECT * FROM users WHERE username LIKE '%$s%'";
	$query = mysqli_query($db_connect, $sql);
	while($result = mysql_fetch_array( $query )){
		echo $result['firstname'];
		echo " ";
		echo $result['lastname'];
		echo "<br>";
		echo $result['idnumber'];
		echo "<br>";
		echo "<br>";
		}
	echo $log_username;
	exit();
	
  }
  exit();
	
}
?>
<script>
function emptyElement(x){
	_(x).innerHTML = "";
}
function Search(){
	var s = _("search").value;
	if(s == ""){
		_("status").innerHTML = "Fill out at least one option";
	} else {
		_("updatebtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "user_search.php");
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
        ajax.send("s="+s);
        }
}
</script>

<form name="signupform" id="signupform" onsubmit="return false;">
    <input id ="search" type="text" maxlength="1000">
    <button id="updatebtn" onclick="Search()">Update</button>
    <span id="status"></span>
  </form>
