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
	echo "<table border=2px>";
	for ($radek = 1; $radek <= 8; $radek++) {
		echo "<tr>";
		for ($sloupec = 1; $sloupec <= 8; $sloupec++) {
			$zbytek = ($radek + $sloupec) % 2;
			if ($zbytek == 0) {
				echo "<td class='cerna'></td>";
			} else {
				echo "<td class='bila'></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	?>

	<style>
		table {
			border-collapse: collapse;
		}

		table tr .cerna {
			background-color: #7C7C7C;
			width: 100px;
			height: 100px;
		}
	</style>
</body>

</html>