/****************************************************************************************/
/*
/* FILE NAME: photos.php
/*
/* DESCRIPTION: Code for handling a user's submitted photos.
/*
/*   DATE      BY       DESCRIPTION
/* ========   ======   =============
/* 4/1/2017 Sam Bowden  Created file before header initializations
/*
/****************************************************************************************/
<?php
include_once("../includes/check_login_status.php");
// Make sure the _GET "u" is set, and sanitize it
$u = "";
if(isset($_GET["u"])){
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
} else {
    header("location: http://www.formfitapp.com");
    exit();	
}
$photo_form = "";
// Check to see if the viewer is the account owner
$isOwner = "no";
if($u == $log_username && $user_ok == true){
	$isOwner = "yes";
	$photo_form  = '<form id="photo_form" enctype="multipart/form-data" method="post" action="../parsers/photo_system.php">';
	$photo_form .=   '<h3>Hi '.$u.', add a new photo into one of your galleries</h3>';
	$photo_form .=   '<b>Choose Gallery:</b> ';
	$photo_form .=   '<select name="gallery" required>';
	$photo_form .=     '<option value=""></option>';
	$photo_form .=     '<option value="Lifting">Lifting</option>';
	$photo_form .=     '<option value="Sports">Sports</option>';
	$photo_form .=     '<option value="Cardio">Cardio</option>';
	$photo_form .=     '<option value="Other">Other</option>';
	$photo_form .=   '</select>';
	$photo_form .=   ' &nbsp; &nbsp; &nbsp; <b>Choose Photo:</b> ';
	$photo_form .=   '<input type="file" name="photo" accept="image/*" required>';
	$photo_form .=   '<p><input type="submit" value="Upload Photo Now"></p>';
	$photo_form .= '</form>';
}
// Select the user galleries
$gallery_list = "";
$sql = "SELECT DISTINCT gallery FROM photos WHERE user='$u'";
$query = mysqli_query($db_connect, $sql);
if(mysqli_num_rows($query) < 1){
	$gallery_list = "This user has not uploaded any photos yet.";
} else {
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$gallery = $row["gallery"];
		$countquery = mysqli_query($db_connect, "SELECT COUNT(id) FROM photos WHERE user='$u' AND gallery='$gallery'");
		$countrow = mysqli_fetch_row($countquery);
		$count = $countrow[0];
		$filequery = mysqli_query($db_connect, "SELECT filename FROM photos WHERE user='$u' AND gallery='$gallery' ORDER BY RAND() LIMIT 1");
		$filerow = mysqli_fetch_row($filequery);
		$file = $filerow[0];
		$gallery_list .= '<div>';
		$gallery_list .=   '<div onclick="showGallery(\''.$gallery.'\',\''.$u.'\')">';
		$gallery_list .=     '<img src="'.$u.'/'.$file.'" alt="cover photo">';
		$gallery_list .=   '</div>';
		$gallery_list .=   '<b>'.$gallery.'</b> ('.$count.')';
		$gallery_list .= '</div>';
    }
}
?>
<?php include('meta.php'); ?>
<body class="w3-theme-l5">
<title><?php echo $u; ?> Photos</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style type="text/css">
form#photo_form{background: #F5F5F5;; border:#CCC 1px solid;; padding:20px;}
div#galleries{}
div#galleries > div{float:left; margin:20px; text-align:center; cursor:pointer;}
div#galleries > div > div {height:100px; overflow:hidden;}
div#galleries > div > div > img{width:150px; cursor:pointer;}
div#photos{display:none; border:#666 1px solid; padding:20px;}
div#photos > div{float:left; width:125px; height:80px; overflow:hidden; margin:20px;}
div#photos > div > img{width:125px; cursor:pointer;}
div#picbox{display:none; padding-top:36px;}
div#picbox > img{max-width:800px; display:block; margin:0px auto;}
div#picbox > button{ display:block; float:right; font-size:36px; padding:3px 16px;}
</style>
<script>

//Function to show the photo gallery to the given user.
function showGallery(gallery,user){
	_("galleries").style.display = "none";
	_("section_title").innerHTML = user+'&#39;s '+gallery+' Gallery &nbsp; <button onclick="backToGalleries()">Go back to all galleries</button>';
	_("photos").style.display = "block";
	_("photos").innerHTML = 'loading photos ...';
	var ajax = ajaxObj("POST", "../parsers/photo_system.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			_("photos").innerHTML = '';
			var pics = ajax.responseText.split("|||");
			for (var i = 0; i < pics.length; i++){
				var pic = pics[i].split("|");
				_("photos").innerHTML += '<div><img onclick="photoShowcase(\''+pics[i]+'\')" src="'+user+'/'+pic[1]+'" alt="pic"><div>';
			}
			_("photos").innerHTML += '<p style="clear:left;"></p>';
		}
	}
	ajax.send("show=galpics&gallery="+gallery+"&user="+user);
}

//Brings user back to previous gallery
function backToGalleries(){
	_("photos").style.display = "none";
	_("section_title").innerHTML = "<?php echo $u; ?>&#39;s Photo Galleries";
	_("galleries").style.display = "block";
}



function photoShowcase(picdata){
	var data = picdata.split("|");
	_("section_title").style.display = "none";
	_("photos").style.display = "none";
	_("picbox").style.display = "block";
	_("picbox").innerHTML = '<button onclick="closePhoto()">x</button>';
	_("picbox").innerHTML += '<img src="<?php echo $u; ?>/'+data[1]+'" alt="photo">';
	if("<?php echo $isOwner ?>" == "yes"){
		_("picbox").innerHTML += '<p id="deletelink"><a href="#" onclick="return false;" onmousedown="deletePhoto(\''+data[0]+'\')">Delete this Photo <?php echo $u; ?></a></p>';
	}
}

//Closes a photo, returns to previous state.
function closePhoto(){
	_("picbox").innerHTML = '';
	_("picbox").style.display = "none";
	_("photos").style.display = "block";
	_("section_title").style.display = "block";
}

//Deletes a photo from the database. 
function deletePhoto(id){
	var conf = confirm("Press OK to confirm the delete action on this photo.");
	if(conf != true){
		return false;
	}
	_("deletelink").style.visibility = "hidden";
	var ajax = ajaxObj("POST", "../parsers/photo_system.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			if(ajax.responseText == "deleted_ok"){
				alert("This picture has been deleted successfully. We will now refresh the page for you.");
				window.location = "photos.php?u=<?php echo $u; ?>";
			}
		}
	}
	ajax.send("delete=photo&id="+id);
}
</script>
</head>
<body>
<?php include("nav.php"); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
 <div class="w3-container" style="margin-top:80px" id="showcase">
<div id="pageMiddle">
  <div id="photo_form"><?php echo $photo_form; ?></div>
  <h2 id="section_title"><?php echo $u; ?>&#39;s Photo Galleries</h2>
  <div id="galleries"><?php echo $gallery_list; ?></div>
  <div id="photos"></div>
  <div id="picbox"></div>
  <p style="clear:left;">These photos belong to <a href="user.php?u=<?php echo $u; ?>"><?php echo $u; ?></a></p>
</div>
</div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>
