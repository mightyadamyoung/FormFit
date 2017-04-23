/****************************************************************************************/
/*
/* FILE NAME: exercise.php
/*
/* DESCRIPTION: Code for handling a user's exercise uploads.
/*
/*   DATE      BY       DESCRIPTION
/* ========   ======   =============
/* 4/1/2017 Sam Bowden  Created file before header initializations
/*
/****************************************************************************************/
<?php
session_start();
// If user is logged in, header them away
if(!isset($_SESSION["username"])){
	header("location: ../index.php");
    exit();
}
?>
<?php
include_once("../includes/check_login_status.php");
// Initialize any variables that the page might echo
$id = $_GET['id'];
$creator = "";
$name = "";
$video = "";
$desc = "";
$date = "";


$sql = "SELECT * FROM exercises WHERE id = '$id'";
$user_query = mysqli_query($db_connect, $sql);

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$creator = $row["username"];
	$name = $row["exname"];
	$desc = $row["descr"];
	$video = $row["video"];
	$date = $row["date"];
}
?>
<?php include('meta.php'); ?>
<body class="w3-theme-l5">
<title><?php echo $name; ?></title>
</head>
<?php include("nav.php"); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<div class="w3-container" style="margin-top:80px" id="showcase">
<div id="pageMiddle">
    
    
 <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
      		<br>
        		<h4><?php echo $name ?></h4><br>
        		<p>Created By <a href="user.php?u=<?php echo $creator; ?>"><?php echo $creator; ?></a>
		      	<hr>
		        <div class="w3-row-padding">
			    <div class="w3-whole w3-margin-bottom">
			      <video width="640" height="480" controls>
  	 		      <source src="<?php echo $creator; ?>/<?php echo $video; ?>" type="video/mp4">
			      Your browser does not support the video tag.
			      </video><br /> 
			      <hr>
			      <p class="w3-large"><?php echo $desc; ?></p>
			      <br />
			      <hr>
			      <h4>Muscles Worked</h4><br />
			    </div>
			    </div>
		       </div> 
		  </div>
              </div>
          </div>
		    
      
    <!-- End Middle Column -->
   </div>
   </div>
  </div>
<?php include_once("../footer.php"); ?>
</body>
</html>
