<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	echo "<table>";
	for ($dny = 1; $dny <= 5; $dny++) {
		echo "<tr>";

		if ($dny == 1) { //výpis dnů do hlavičky
			echo "<th>Po</th>";
		} else if ($dny == 2) {
			echo "<th>Út</th>";
		} else if ($dny == 3) {
			echo "<th>St</th>";
		} else if ($dny == 4) {
			echo "<th>Čt</th>";
		} else if ($dny == 5) {
			echo "<th>Pá</th>";
		}

		for ($hodina = 1; $hodina <= 5; $hodina++) { //cyklus tvořící okna pro předměty
			echo "<td></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>

	<style>
		body {
			height: 210mm;
		}
		table {
			border-collapse: collapse;
			width: 280mm;
			height: 200mm;
			border: solid 1mm black;
			/* border: 1px solid black; */
		}

		table th {
			width: 12%;
			border: 1mm solid black;
			font-size: 15mm;
			background-color: lightgreen;
		}

		table td {
			width: 17.6%;
			border: 0.3mm solid black;
		}
	</style>
</body>

</html>