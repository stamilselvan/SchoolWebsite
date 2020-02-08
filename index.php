<?php 
	include('header.php');
	include('functions.php');
?>
<div style="position:absolute; top:50%; left:50%;" id="loader">
Loading..<i class="fas fa-spin fa-spinner w3-text-red"></i>
</div>

<div id="content" style="display:none">
<div class="w3-bar w3-blue-grey w3-card-2 w3-row">
  <a href="#" class="w3-bar-item w3-button w3-border-right w3-col l2 s2"><i class="fas fa-home"></i> <span class="w3-hide-small w3-hide-medium">Home</span><br><span class="w3-small w3-hide-large">Home</span></a>
  <a href="#facility" class="w3-bar-item w3-button w3-border-right w3-col l2 s2"><i class="fas fa-cogs"></i> <span class="w3-hide-small w3-hide-medium">Facility</span><br><span class="w3-small w3-hide-large">Facility</span></a>
  <a href="#gallery" class="w3-bar-item w3-button w3-border-right w3-col l2 s2"><i class="fas fa-images"></i> <span class="w3-hide-small w3-hide-medium">Gallery</span><br><span class="w3-small w3-hide-large">Gallery</span></a>
  <a href="#aboutus" class="w3-bar-item w3-button w3-border-right w3-col l2 s2"><i class="fas fa-user"></i> <span class="w3-hide-small w3-hide-medium">About Us</span><br><span class="w3-small w3-hide-large">About</span></a>
  <a href="#sponsorsanddonations" class="w3-bar-item w3-button w3-border-right w3-col l2 s2"><i class="fas fa-hand-holding-usd"></i> <span class="w3-hide-small w3-hide-medium">Sponsors & Donations</span><br><span class="w3-small w3-hide-large">Donation</span></a>
  <a href="#contact_us" class="w3-bar-item w3-button w3-col l2 s2"><i class="fas fa-share-alt"></i> <span class="w3-hide-small w3-hide-medium">Contact Us</span><br><span class="w3-small w3-hide-large">Contact</span></a> 
   
</div>
<div class="w3-row">
<?php
	include('slide.php');
?>
</div>
<?php
	echo "<br>";
	include('vision_and_mission.php');
	echo "<br>";
	include('facilities.php');
	echo "<br>";
	include('gallery.php');
	echo "<br>";
	include('aboutus.php');
	echo "<br>";
	include('sponsorsanddonations.php');
	echo "<br>";
	include('contactus.php');
	include('footer.php');
?>
</div>	

