<?php
// Score, 1-10 (10 Perfect, 1 doesn't work at all)
$status = "2";
$notes = "Don't seem to do anything in their current state, installs correctly, and some builds have the GPU reported as 'working' in device manager.";
$downurl = "https://github.com/woachk/rpigpu/releases";
$drivername = "Playing Games on the RPI";

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
      <p>Wanting to play some games on the PI? Here's a list of games that should work alright!</p>
    </div>
<!--    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p> 
    </div>-->
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal">Emulation</h2>
	  <p>There is a port of RetroArch to the ARM platform, which was done by driver1998, you can find the original topic on it <a href="https://forums.libretro.com/t/retroarch-for-windows-rt-and-windows-10-arm-desktop/21069">here</a> with more information on it. If you know how to do so, it's recomended to build an ARM build of RetroArch yourself, otherwise, here's a link.</p>
	  <a class="w3-button w3-black" href="retroarch_arm32_by_driver1998.7z">Download RetroArch for ARM32</a>
	  
    <p>There's also a port of DOSBox-X to ARM64 which was also done by driver1998, which will allow you to play old DOS games on your system. If you know how to you should compile the latest version for ARM.<a href="https://github.com/joncampbell123/dosbox-x"> Here's the source code to do so.</a></p>
	  <a class="w3-button w3-black" href="dosbox-x-0.82.16-windows-arm64-driver1998.7z">Download DOSBox-X for ARM64</a>
	  
    <p>If you're looking to play NES / Famicon games on the pi you can use Nestopia</p>
	  <a class="w3-button w3-black" href="https://sourceforge.net/projects/nestopia/">Download Nestopia (Use 32Bit version)</a>
    </div>
<!--     <div class="w3-third w3-container">
     <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div> -->
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