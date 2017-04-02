/****************************************************************************************/
/*
/* FILE NAME: nav.php
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
<nav class="w3-sidenav w3-orange w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold" id="mySidenav"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b><a href ="/index.php">FormFit<br>App</b></a></h3>
  </div>
  <a href="newuser.php" onclick="w3_close()" class="w3-padding w3-hover-white">Register</a> 
  <a href="#" onclick="w3_close()" class="w3-padding w3-hover-white">Shop</a> 
  <a href="#" onclick="w3_close()" class="w3-padding w3-hover-white">About</a> 

</nav>

<div class="w3-container w3-top w3-hide-large w3-orange w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-btn w3-orange w3-border w3-border-white w3-margin-right" onclick="w3_open()">|||</a>
  <span>FormFit</span>
</div>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
  <a href="newuser.php" onclick="w3_close()" class="w3-padding w3-hover-white">Register</a> 
  <a href="#" onclick="w3_close()" class="w3-padding w3-hover-white">Shop</a> 
  <a href="#" onclick="w3_close()" class="w3-padding w3-hover-white">About</a> 
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
