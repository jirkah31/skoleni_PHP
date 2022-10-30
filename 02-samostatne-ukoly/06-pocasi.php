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

	$mesta = [
		"Praha" => [
			"16.9." => ["teplota" => "10.5 °C", "popis" => "zataženo",],
			"17.9." => ["teplota" => "13.5 °C", "popis" => "polojasno",],
			"18.9." => ["teplota" => "20 °C", "popis" => "slunečno",],
		],
		"Brno" => [
			"16.9." => ["teplota" => "11.5 °C", "popis" => "zataženo",],
			"17.9." => ["teplota" => "13.5 °C", "popis" => "zima",],
			"18.9." => ["teplota" => "20 °C", "popis" => "slunečno",],
		],
		"Příbram" => [
			"16.9." => ["teplota" => "10.5 °C", "popis" => "zataženo",],
			"17.9." => ["teplota" => "13.5 °C", "popis" => "polojasno",],
			"18.9." => ["teplota" => "21 °C", "popis" => "teplo",],
		],
		"Plzeň" => [
			"16.9." => ["teplota" => "10.5 °C", "popis" => "zataženo",],
			"17.9." => ["teplota" => "20.5 °C", "popis" => "polojasno",],
			"18.9." => ["teplota" => "20 °C", "popis" => "slunečno",],
		]
	];


	foreach ($mesta as $mesto => $datumy) {
		echo "<h1>$mesto</h1>";
		echo "<table border=1>";
		echo "<tr><th>Datum</th> <th> Teplota </th> <th> Popis </th> </tr>";
		foreach ($datumy as $datum => $udaje) {

			echo "<tr><td>$datum</td> <td> {$udaje['teplota']} </td> <td> {$udaje['popis']} </td> </tr>";
		}
		echo "</table>";
	}
	?>
</body>

</html>