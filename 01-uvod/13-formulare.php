<?php
var_dump($_GET); //zobrazí v PHP hodnoty, které uživatel odeslal formulářem metodou post (vytvoří se formulář, který var_dump zobrazí na stránce); alternativně jde použít $_REQUEST, ale je lepší používat konkrétní proměnou aby jsme věděli, co posíláme

//kontrola zda je odeslaný formulář pomocí tlačítka "Odeslat" a nedošlo k nějaké chybě
if (array_key_exists("odeslat", $_GET)){ //funkce, která kontroluje zda se v poli nachází konkrétní KLÍČ
	echo "<h2> Formulář byl odeslán</h2>";
}

$jmeno = $_GET["jmeno"];
$vek = $_GET["vek"];
$heslo = $_GET["password"];
echo "Jméno: $jmeno, věk: $vek, heslo: $heslo.";
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
	<?php

	?>

	<form action="" method="get"> <!-- formulář netody GET, není vhodný pro odesílání citlivých informací, protože se zobrazují v URL, google vyhledávač takto funguje např., GET je výchozí chování formuláře; pro citlivé informace je vhodný formulář s nastavením method = "post" -->
		Jméno: <input type="text" name="jmeno">
		<br>

		Věk: <input type="text" name="vek">
		<br>

		Heslo: <input type="password" name="password">
		<br>

		<input type="submit" name="odeslat" value="Odeslat">
		<button name="odeslat">Odeslat</button>
	</form>
</body>
</html>