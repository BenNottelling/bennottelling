<?php
// Score, 1-10 (10 Perfect, 1 doesn't work at all)
$status = "8";
$notes = "Near perfect, but out of the box no USB booting";
$downurl = "https://pi64.win/download-usb-drivers/";
$drivername = "MCCI USB Drivers";

if ($_GET["report"] = "all"){
//echo "Status:" + $status + "Notes:" + $notes + "Download URl:" + $downurl;
}
//echo "Status " + $status;// + "Notes:" + $notes + "Download URl:" + $downurl;

?>
<html>
    <head>
    <title>W10 Raspberry PI <?php echo $drivername; ?> Drivers</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .downloadbutton {
	-moz-box-shadow: 0px 0px 0px 2px #9fb4f2;
	-webkit-box-shadow: 0px 0px 0px 2px #9fb4f2;
	box-shadow: 0px 0px 0px 2px #9fb4f2;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:19px;
	padding:12px 37px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.downloadbutton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
.downloadbutton:active {
	position:relative;
	top:1px;
}
	#sc1{
    background-color=red;
	}
    #sc2{
    background-color=red;
	}
    #sc3{
    background-color=red;
	}
    #sc4{
    background-color=red;
	}
    #sc5{
    background-color=yellow;
	}
    #sc6{
    background-color=yellow;
	}
    #sc7{
    background-color=yellow;
	}
    #sc8{
    background-color=green;
	}
    #sc9{
    background-color=green;
	}
    #sc10{
    background-color=green;
	}
    </style>
    </head>
    
    <body>
    <h1><?php echo $drivername; ?></h1>
    <h4>Driver funcionality score:</h4>
    <p class="sc<?php echo $status; ?>"> <?php echo $status; ?> (1-10)</p>
    <h4>Driver notes:</h4>
    <p><?php echo $notes; ?></p>
    <a class="downloadbutton" href="<?php echo $downurl; ?>">Driver Download</a>
    </body>
</html>