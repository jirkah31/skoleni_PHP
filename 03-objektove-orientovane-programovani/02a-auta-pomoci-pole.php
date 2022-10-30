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
	//nadefinujeme to pro srovnání jako klasické POLE
		$auto1 = [
			"znacka" => "Tesla",
			"rokVyroby" => 2020,
		];

		$auto2 = [
			"znacka" => "Range Rover",
			"rokVyroby" => 2019,
		];

		$auta = [$auto1, $auto2];
		var_dump($auta);

		//vypsání POLE $auta do tabulky (klasika toto není OOP (obějktově orientované programování ))
		echo "<table border=1>";
		echo "<tr> <th>Znařka</th> <th>Rok výroby</th> </tr>";
		foreach($auta as $auto){
			echo "<tr> <td> {$auto['znacka']}</td> <td> {$auto['rokVyroby']}</td> </tr>";
		}
		echo "</table>";
	?>
</body>
</html>