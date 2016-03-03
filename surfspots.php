<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
<title>Arctic Surf</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1uSUlerjsJYGwANyg--V3OYh2pEprpu4"></script>
<script src="http://hammerjs.github.io/dist/hammer.js"></script>
<script src="main.js"></script>
<script src="maps.js"></script>
<script src="touchnav.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1">


 
</head>
<body>
<div id="touch-listener">
</div>
	

<!--Navigation-->

<?php include 'nav.php';?>

<div class="header" id="header-surfspots">
	<div class="overlay">
	<div id="textbox">
		<h1>Discover Iceland, Arctic Surfing!</h1>
	</div>
	</div>
</div>
<div class="dark-bg">

<div class="home-wrapper">
	<div class="title">
	<h2>Surf spots</h2>
	</div>
</div>



<div class="home-wrapper" id="map-wrapper">
	<div id="map-canvas">
	
</div>
</div>
</div>

<footer>
<?php include 'footer.php'; ?>
</footer>







</body>
</html>
