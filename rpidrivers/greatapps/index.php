<?php
// Score, 1-10 (10 Perfect, 1 doesn't work at all)
$status = "2";
$notes = "Don't seem to do anything in their current state, installs correctly, and some builds have the GPU reported as 'working' in device manager.";
$downurl = "https://github.com/woachk/rpigpu/releases";
$drivername = "Great Software to Download";

if ($_GET["report"] = "all"){
//echo "Status:" + $status + "Notes:" + $notes + "Download URl:" + $downurl;
}
//echo "Status " + $status;// + "Notes:" + $notes + "Download URl:" + $downurl;

?>
<!DOCTYPE html>
<html lang="en">
<title>W10 Raspberry PI <?php echo $drivername; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}

 #sc1{
 background-color:red;
 color:white;
 }
 #sc2{
 background-color:red;
 color:white;
 }
 #sc3{
 background-color:red;
 color:white;
 }
 #sc4{
 background-color:red;
 color:white;
 }
 #sc5{
 background-color:yellow;
 color:white;
 }
 #sc6{
 background-color:yellow;
 color:white;
 }
 #sc7{
 background-color:yellow;
 color:white;
 }
 #sc8{
 background-color:green;
 color:white;
 }
 #sc9{
 background-color:green;
 color:white;
 }
 #sc10{
 background-color:green;
 color:white;
 }
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
<!--    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Values</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a> -->
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Quick Links</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://rpidrivers.bennottelling.com/usb/index.php">MCCI USB Drivers</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://rpidrivers.bennottelling.com/gpu/index.php">GPU Drivers</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://rpidrivers.bennottelling.com/ethernet/index.php">Ethernet Drivers</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://rpidrivers.bennottelling.com/uefi/index.php">UEFI Downloads</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="https://gist.github.com/BenNottelling/9c43d168e8344ac7c971c701c5f5e455">Optimization Script</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://rpidrivers.bennottelling.com/greatapps/index.php">Great Software to Download</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="http://rpidrivers.bennottelling.com/greatapps/gaming/index.php">Gaming on the RPI</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><?php echo $drivername; ?></h1>
      <p>Here's a list of software that is easily recomended to isntall on your PI!</p>
    </div>
<!--    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> 
    </div>-->
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal">Webbrowsing and Usage</h2>
	  <p>Currently the only webbrowser that is actually good is Firefox for ARM64</p>
	  <a class="w3-button w3-black" href="https://archive.mozilla.org/pub/firefox/nightly/latest-mozilla-central/firefox-67.0a1.en-US.win64-aarch64.installer.exe">Download Firefox for ARM64</a>
    </div>
<!--     <div class="w3-third w3-container">
     <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div> -->
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
		<h2 class="w3-text-teal">Editing and Tweaking</h2>
	  <p>Notepad++ works great and is a nice way to edit files, but it doesn't support ARM64, the 32bit version will run perfectly though</p>
	  <a class="w3-button w3-black" href="https://notepad-plus-plus.org/download/">Download Notepad++</a>
	  <p>Notepad2 is another alternative to notepad, and it supports ARM64</p>
	  <a class="w3-button w3-black" href="Notepad2_ARM64_v4.19.02r1827.zip">Download Notepad2 for ARM64</a>
    </div>
<!--     <div class="w3-third w3-container">
     <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div> -->
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
		<h2 class="w3-text-teal">Videos and Media</h2>
	  <p>VLC has for a long time been regarded as one of the best video and media players around, and, it has native ARM64 support! <br>Note: VideoLan doesn't provid an installer on ARM64, so feel free to try my unofficial installer</p>
	  <a class="w3-button w3-black" href="https://www.videolan.org/vlc/download-windows.html">Download VLC for ARM64 (click the down arrow and select ARM 64)</a>
	  <a class="w3-button w3-black" href="vlc-4.0.0-dev-ARM64-Installer.zip">Download VLC for ARM64 Unofficial Installer</a>
	  
	  <p>Spotify is a great way to stream your music on any platform, although it doesn't have an ARM64 build, the 32bit version works fine on the PI</p>
	  <a class="w3-button w3-black" href="https://www.spotify.com/us/download/windows/">Download Spotify</a>
    </div>
<!--     <div class="w3-third w3-container">
     <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div> -->
  </div>
  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>