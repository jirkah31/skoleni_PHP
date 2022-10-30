<?php
$barvaRamecku = null;

if (array_key_exists("barvaRamecku", $_GET)) {
	$barvaRamecku = $_GET["barvaRamecku"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
</body>

<!-- POMOCNÝ FORM, abych zjistil odkaz -->

<!-- <form action="" method= "get">
	<input type="text" name = "barvaRamecku">
	<button name = "odeslat">Odeslat</button>
</form> --> 

<a href="?barvaRamecku=green&odeslat=">Zelená</a>
<a href="?barvaRamecku=red&odeslat=">Červená</a>
<a href="?barvaRamecku=blue&odeslat=">Modrá</a>

<div></div>

<style>
	div {
		height: 150px;
		background-color: <?php echo $barvaRamecku; ?>;
	}
</style>

</html>