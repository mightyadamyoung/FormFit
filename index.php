/****************************************************************************************/
/*
/* FILE NAME: index.php
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
include("includes/check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok == true){
	header("location: users/user.php?u=".$_SESSION["username"]);
    exit();
    }
?>
<?php include('header.php') ?>

<?php include('nav.php') ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b><img src = "images/logo.png" alt="FormFit"></b></h1>
    <h1 class="w3-xxxlarge w3-text-orange"><b>Don't just get fit. Get FormFit.</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
  </div>
   <!-- Login -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <?php include('login.php') ?>
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="/images/weightlifting.jpeg" style="width:100%" onclick="onClick(this)" alt="">
      <img src="/images/training.jpeg" style="width:100%" onclick="onClick(this)" alt="">
    </div>

    <div class="w3-half">
      <img src="/images/running.jpg" style="width:100%" onclick="onClick(this)" alt="">
      <img src="/images/weights.jpg" style="width:100%" onclick="onClick(this)" alt="">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black w3-padding-0" onclick="this.style.display='none'">
    <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topright">Ã—</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>


<?php include('footer.php') ?>
