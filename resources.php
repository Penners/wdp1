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
<script src="http://hammerjs.github.io/dist/hammer.js"></script>
<script src="main.js"></script>
<script src="touchnav.js"></script>
<script src="form.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>



<!--Navigation using php include-->
<?php include 'nav.php';?>
<div class="header" id="header-gallery">
	<div class="overlay">
	<div id="textbox">
		<h1>Discover Iceland, Arctic Surfing!</h1>
	</div>
	</div>
</div>


<div class="dark-bg">
<div class="home-wrapper" id="home-videos">
	<div class="row">
		<div class="content-col-two-third">
		<?php include 'resource-list.php'; ?>
		</div>
		<div class="content-col-one-thrid">
			<p></p>
		</div>
	</div>
</div>
</div>

<!--Footer using php include-->
<footer>
<?php include 'footer.php'; ?>

</footer>
</body>
</html>
