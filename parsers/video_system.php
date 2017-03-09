<?php
include_once("../includes/check_login_status.php");
if($user_ok != true || $log_username == "") {
	exit();
}
?>
<?php
$sql = "SELECT * FROM exercises WHERE username = '$log_username' ORDER BY date DESC LIMIT 1";
$user_query = mysqli_query($db_connect, $sql);

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$id = $row["id"];
}

if (isset($_FILES["video"])){
	$fileName = $_FILES["video"]["name"];
	$fileNameTmp = $_FILES["video"]["tmp_name"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	$size = $_FILES["video"]["size"];
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if (!preg_match("/\.(mp4|MP4|WMV|wmv|flv)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Video type not supported");
		exit();
	 } else{
		$moveResult = move_uploaded_file($fileNameTmp, "../users/$log_username/$db_file_name");
		if ($moveResult != true) {
			header("location: ../message.php?msg=ERROR: File upload failed");
			exit();
		}
		$sql = "UPDATE exercises SET video='$db_file_name' WHERE username='$log_username' AND id = '$id'";
		$query = mysqli_query($db_connect, $sql);
		mysqli_close($db_connect);
		header("location: ../users/exercise.php?id=$id");
		exit();
	}
	
}
?>