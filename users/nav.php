<?php 
$sql = "SELECT * FROM friends WHERE user2 = '$log_username' AND accepted = '0'";
$user_query = mysqli_query($db_connect, $sql);
$numnotes = mysqli_num_rows($user_query);
?>
<?php 
$sql = "SELECT * FROM notifications  WHERE username = '$log_username' AND did_read = '0'";
$user_query = mysqli_query($db_connect, $sql);
$numnotes += mysqli_num_rows($user_query);
?>

<nav class="w3-sidenav w3-orange w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold" id="mySidenav"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>FormFit<br>App</b></h3>
  </div>
  <a href="index.php" class="w3-padding-large w3-hover-white" title="News">Fitness Zone</a>
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="notifications.php" class="w3-padding-large w3-hover-white" title="Notifications">Notifications<i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-red"><?php echo $numnotes ?></span></a>     
  </li>
  <a href="create.php" class="w3-padding-large w3-hover-white" title="Account Settings">Create Exercise</a>
  <a href="settings.php?u=<?php echo $log_username ?>" class="w3-padding-large w3-hover-white" title="Account Settings">Settings</a>
  <a href="../logout.php" class="w3-padding-large w3-hover-white" onclick="w3_close()" class="w3-padding w3-hover-white">Logout</a> 
</nav>

<div class="w3-container w3-top w3-hide-large w3-orange w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-btn w3-orange w3-border w3-border-white w3-margin-right" onclick="w3_open()">|||</a>
  <span>FormFit</span>
</div>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
  <a href="index.php" class="w3-padding-large w3-hover-white" title="News">Fitness Zone</a>
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="notifications.php" class="w3-padding-large w3-hover-white" title="Notifications">Notifications<i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-red"><?php echo $numnotes ?></span></a>     
  </li>
  <a href="settings.php?u=<?php echo $log_username ?>" class="w3-padding-large w3-hover-white" title="Account Settings">Settings</a>
  <a href="../logout.php" class="w3-padding-large w3-hover-white" onclick="w3_close()" class="w3-padding w3-hover-white">Logout</a> 
</div>

<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

</script>