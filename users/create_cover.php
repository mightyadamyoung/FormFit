<?php
include("../includes/check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok != true){
	header("location: ../index.php");
    exit();
    }
?>
<?php include('meta.php'); ?>
<body class="w3-theme-l5">
<title>Add a Video</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style type="text/css">

</style>
<script>
function Uploading(){
_("status").innerHTML = 'please wait ...';
		
}
</script>
</head>
<body>
<?php include("nav.php"); ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<div class="w3-container" style="margin-top:80px" id="showcase">
<div id="pageMiddle">
 <form enctype="multipart/form-data" method="post" action ="../parsers/photo_system.php">
 <h2>Now upload a cover photo of the exercise!</h2>
    <div>Video: </div>
    <input name="coverPhoto" type="file">
    <br /><br />
    <input type="submit" value="Upload" onClick="Uploading()">
    <span id="status"></span>
  </form> 
</div>
</div>
</div>
<?php include_once("../footer.php"); ?>
</body>
</html>