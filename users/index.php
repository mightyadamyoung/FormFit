/****************************************************************************************/
/*
/* FILE NAME: index.php
/*
/* DESCRIPTION: Code for handling style and format of the page relevent to user's view.
/*
/*   DATE      BY       DESCRIPTION
/* ========   ======   =============
/* 4/1/2017 Sam Bowden  Created file before header initializations
/*
/****************************************************************************************/
<?php include("../includes/check_login_status.php"); ?>
<?php
session_start();
// If user is not logged in, header them away
if(!isset($_SESSION["username"])){
	header("location: ../message.php?msg=You must be logged in to view.");
    exit();
}
?>
<?php
$exercise = " ";
$sql = "SELECT * FROM exercises WHERE video != ' ' ORDER BY date DESC";
$user_query = mysqli_query($db_connect, $sql);
$i = 1;
while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$id = $row["id"];
	$creator = $row["username"];
	$name = $row["exname"];
	$desc = $row["descr"];
	$video = $row["video"];
	
	$exercise .= '<div class="w3-quarter">';
	$exercise .= '<img src="'.$log_username.'/'.$video.'" alt="" style="width:100%">';
	$exercise .= '<h3><a href="exercise.php?id='.$id.'">'.$name.'</a></h3>';
	$exercise .= '<p>'.$desc.'</p></div>';
	if ($i % 4 == 0){
		$exercise .= '<br />';
	}
	
	$i = $i + 1;
	
}



?>
<?php include("status.php") ?>
<?php include('meta.php'); ?>
<body class="w3-theme-l5">
<title><?php echo $u; ?> Settings</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<script>
function emptyElement(x){
	_(x).innerHTML = "";
}
</script>
</head>
<body>

<?php include("nav.php"); ?>
<!-- !PAGE CONTENT! -->

<div class="w3-main" style="margin-left:340px;margin-right:40px">
<div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxxlarge w3-text-orange"><b>Exercises</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
  </div>
<div class="w3-container" style="margin-top:80px" id="showcase">
<div id="pageMiddle">
 <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <?php echo $exercise; ?>
 </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
</div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>

