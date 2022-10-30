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
	echo "<table>";
	$pocetPrikladu = 0;
	while ($pocetPrikladu < 20) {
		$cislo1 = rand(0, 10);
		$cislo2 = rand(0, 10);
		$znaminko = rand(0, 1);

		if ($znaminko == 0) {
			$vysledek = $cislo1 + $cislo2;
			$znaminko = "+";
		} else {
			$vysledek = $cislo1 - $cislo2;
			$znaminko = "-";
		} 

		if ($vysledek >= 0 && $vysledek <= 10) {
			echo "<tr><td>$cislo1 $znaminko $cislo2 = </tr></td>";
			$pocetPrikladu++;
		}
	}
	echo "</table>";
	

	?>
	<style>
		table td {
			border: 1px solid black;
		}
	</style>
	
</body>

</html>