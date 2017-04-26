
/*   DATE      	  BY       	 	 DESCRIPTION
/* ========   	======   		=============
/* 4/26/2017 Jordan Hendl  	File for handling exercises

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
$muscles = "";
$map = "";


$sql = "SELECT * FROM exercises WHERE id = '$id'";
$user_query = mysqli_query($db_connect, $sql);

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$creator = $row["username"];
	$name = $row["exname"];
	$desc = $row["descr"];
	$muscles = $row["muscles"];
	$video = $row["video"];
	$type = $row["type"];
	$date = $row["date"];

	
	if ($type == 'y')
	{
		$videopost = "<iframe width='560' height='315' src=".$video." frameborder='0' allowfullscreen></iframe>";
	}
	else 
	{
		$videopost = " <video width='460' height='320' controls>
  	 		      <source src=".$creator."/".$video." type='video/mp4'>
  	 		      <source src=".$creator."/".$video." type='video/webm'>
  	 		      <source src=".$creator."/".$video." type='video/ogg'>
  	 		      <source src=".$creator."/".$video." type='video/wmv'>
			      Your browser does not support the video tag.
			      </video> ";	
			    }
			    
	$muscarr = explode(', ', $muscles);		    
			
	if  (in_array("Pectorals", $muscarr)){		    
		$map .= '<area alt="" title="" href="#" shape="poly" coords="168,198,181,273,325,271,333,211,330,204,327,197" onmouseover="this.style.backgroundColor="#00FF00;"/>';
	}
	if  (in_array("Biceps", $muscarr)){		    
		$map .= '<area alt="" title="" href="#" shape="poly" coords="128,231,121,326,159,326,160,229" />';
	}
	if  (in_array("Biceps", $muscarr)){
        	$map .= '<area alt="" title="" href="#" shape="poly" coords="383,243,358,242,361,327,394,322" />';
        }
        if  (in_array("Dealts", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="poly" coords="131,225,133,175,184,172" />';
	}
	if  (in_array("Dealts", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="339,165,391,221" />';
	}
	if  (in_array("Forearms", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="116,332,138,450" />';
	}
	if  (in_array("Forearms", $muscarr)){
        	$map .= '<area alt="" title="" href="#" shape="rect" coords="359,349,423,439" />';
        }
        if  (in_array("Abs", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="211,288,277,472" />';
	}
	if  (in_array("Obliques", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="305,294,337,414" />';
	}
	if  (in_array("Obliques", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="179,309,198,438" />';
	}
	if  (in_array("Quads", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="172,491,236,681" />';
	}
	if  (in_array("Quads", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="275,513,327,659" />';
	}
	if  (in_array("Scapulas", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="658,184,728,330" />';
	}
	if  (in_array("Rear Dealts", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="585,183,642,252" />';
	}
	if  (in_array("Rear Dealts", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="752,184,829,263" />';
	}
	if  (in_array("Lats", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="738,274,775,395" />';
	}
	if  (in_array("Lats", $muscarr)){
        	$map .= '<area alt="" title="" href="#" shape="rect" coords="629,287,674,388" />';
        }
        if  (in_array("Glutes", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="576,257,596,343" />';
	}
	if  (in_array("Spinae", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="800,273,843,330" />';
	}
	if  (in_array("Triceps", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="631,427,781,533" onmouseover="this.style.backgroundColor="#00FF00;"/>';
	}
	if  (in_array("Triceps", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="677,379,719,425" onmouseover="this.style.backgroundColor="#00FF00;"/>';
	}
	if  (in_array("Hamstrings", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="618,539,676,695" />';
	}
	if  (in_array("Hamstrings", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="721,553,768,688" />';
	}
	if  (in_array("Calves", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="644,716,685,823" />';
	}
	if  (in_array("Calves", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="738,732,781,809" />';		   
	}
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
    
    
 <div align ="center"><!-- Middle Column -->
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
			    
			      <?php echo $videopost ?><br /> 
			      <hr>
			      <p class="w3-large"><?php echo $desc; ?></p>
			      <br />
			      <hr>
			      <h4>Muscles Worked</h4><br />
			      <img src="../images/muscles.jpg" alt="" usemap="#Map" />
				<map name="Map" id="Map">
				    <?php echo $map; ?>
				</map>
			    </div>
			    </div>
		       </div> 
		  </div>
              </div>
          </div>
		    
      
    <!-- End Middle Column --></div>
   </div>
   </div>
  </div>
<?php include_once("../footer.php"); ?>
</body>
</html>