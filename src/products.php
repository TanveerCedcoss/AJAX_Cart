<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<?php include_once("header.php"); ?>
	<div id="main">
		<div id="products">
			<?php include("config.php");?>
			<?php include("display.php");?>
		</div>
		<div id="cart">
		</div>
	</div>
	
	<?php include_once("footer.php"); ?>
	<script src="script.js"></script>
</body>

</html>

