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
	//generate the map		
	if  (in_array("Pectorals", $muscarr)){		    
		$map .= '<area alt="" title="" href="#" shape="rect" coords="172,197,323,272" onmouseover="writeText(\'Pectorals\')"/>';
	}
	
	if  (in_array("Biceps", $muscarr)){
        	$map .= '<area alt="" title="" href="#" shape="rect" coords="131,246,161,330" onmouseover="writeText(\'Biceps\')"/>
    			 <area alt="" title="" href="#" shape="rect" coords="362,244,396,328" onmouseover="writeText(\'Biceps\')"/>';
        }
        if  (in_array("Dealts", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="poly" coords="136,163,136,229,187,182" onmouseover="writeText(\'Dealts\')"/>
    			 <area alt="" title="" href="#" shape="poly" coords="379,172,372,239,323,184" onmouseover="writeText(\'Dealts\')"/>';
	}
	if  (in_array("Forearms", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="114,339,145,442" onmouseover="writeText(\'Forearms\')"/>
    			 <area alt="" title="" href="#" shape="rect" coords="411,344,390,451" onmouseover="writeText(\'Forearms\')"/>';
	}
        if  (in_array("Abs", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="209,285,283,483" onmouseover="writeText(\'Abs\')"/>';
	}
	if  (in_array("Obliques", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="174,298,211,435" onmouseover="writeText(\'Obliques\')"/>
    		   	 <area alt="" title="" href="#" shape="rect" coords="338,298,300,436" onmouseover="writeText(\'Obliques\')"/>';
	}
	if  (in_array("Quads", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="172,484,241,674" onmouseover="writeText(\'Quads\')"/>
    			 <area alt="" title="" href="#" shape="rect" coords="356,487,271,678" onmouseover="writeText(\'Quads\')"/>';
	}
	if  (in_array("Scapulas", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="674,188,728,308" onmouseover="writeText(\'Scapulas\')"/>';
	}
	if  (in_array("Rear Dealts", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="602,174,654,260" onmouseover="writeText(\'Rear Dealts\')"/>
    		         <area alt="" title="" href="#" shape="rect" coords="821,173,761,257" onmouseover="writeText(\'Rear Dealts\')"/>';
	}
	if  (in_array("Lats", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="623,262,669,394" onmouseover="writeText(\'Lats\')"/>
    			 <area alt="" title="" href="#" shape="rect" coords="797,262,752,403" onmouseover="writeText(\'Lats\')"/>';
	}
        if  (in_array("Triceps", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="576,234,609,335" onmouseover="writeText(\'Triceps\')"/>
    			 <area alt="" title="" href="#" shape="rect" coords="842,240,808,340" onmouseover="writeText(\'Triceps\')"/>';
	}
	if  (in_array("Glutes", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="631,428,776,525" onmouseover="writeText(\'Glutes\')"/>';
	}
	if  (in_array("Spinae", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="675,386,725,432" onmouseover="writeText(\'Erector Spinae\')"/>';
		
	}
	if  (in_array("Hamstrings", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="618,539,676,695" onmouseover="writeText(\'HamStrings\')"/>
			 <area alt="" title="" href="#" shape="rect" coords="713,545,779,687" onmouseover="writeText(\'Hamstrings\')"/>';
	}
	if  (in_array("Calves", $muscarr)){
		$map .= '<area alt="" title="" href="#" shape="rect" coords="644,716,685,823" onmouseover="writeText(\'Calves\')"/>
			 <area alt="" title="" href="#" shape="rect" coords="738,732,781,809" onmouseover="writeText(\'Calves\')"/>';
	}
}
?>
<?php include('meta.php'); ?>
<body class="w3-theme-l5">
<title><?php echo $name; ?></title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.maphilight.min.js"></script>
<script type="text/javascript">$(function() {
		$('.map').maphilight({fade: false, alwaysOn: true});
	});
</script>
<script>
function writeText(txt) {
    _("musc").innerHTML = txt;
}
</script>
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
			      <span id="musc"></span>
			      <img class="map" src="../images/muscles.jpg" alt="" usemap="#Map" />
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