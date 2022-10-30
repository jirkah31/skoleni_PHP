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
		for ($cislo=1; $cislo <= 10; $cislo++) { //for je vhodný pokud počítáme od do s nějakým pevně daným krokem
			echo "$cislo";
		}

		for($cislo = 1; $cislo <= 6; $cislo++){ //nadpisy h1 až h6 for(výchozí proměnná; limit cyklu; krokování) { }
			echo "<h$cislo>H$cislo</h$cislo>";
		}


		//tabulka pro výpočet teploty  °C a °F
		echo "<table border 1px>";
		for($teplotaC = -100; $teplotaC <= 100; $teplotaC = $teplotaC + 10){
			$teplotaF = $teplotaC * 1.8 + 32;
			if($teplotaC == 0){		//podbarvení buněk podle teploty
				$tridaC = 'nula';
			} else if ($teplotaC > 0) {
				$tridaC ='kladny';
			} else {
				$tridaC = 'zaporny';
			}

			if($teplotaF == 0){		//podbarvení buněk podle teploty
				$tridaC = 'nula';
			} else if ($teplotaF > 0) {
				$tridaF ='kladny';
			} else {
				$tridaF = 'zaporny';
			}
			echo "<tr> <td class='$tridaC'>$teplotaC °C</td><td class='$tridaF'>$teplotaF °F</td> </tr>";

			
		}
		echo "</table>";
	?>
<style>
	.zaporny {
		background-color: lightskyblue;
	}

	.nula {
		background-color: lightgreen;
	}
	.kladny {
		background-color: lightsalmon;
	}
</style>
<br>

	<?php
		//TABULKA S MALOU NÁSOBILKOU
		echo "<table border=1px>";
		// obsah tabulky
		echo "<tr>";
			echo "<th></th>";
			for($sloupec = 1; $sloupec <= 10; $sloupec++){
				echo "<th>$sloupec</th>";
			}
		echo "</tr>";
		for($radek = 1; $radek <= 10; $radek++){
			echo "<tr>"; 

			
				echo "<th>$radek</th>"; //vertikální hlavička tabulky
			
				for ($sloupec = 1; $sloupec <= 10; $sloupec++){
					$soucin = $sloupec * $radek;
					echo "<td>$soucin</td>";
				}
			
			echo "</tr>";
		}
		echo "</table>";
	?>
<style> /* tento styl se mi vztáhne i na předchozí tabulku a změní se tak rozměry buněk */
	table{
		border-collapse: collapse; /* smrskne čáry dohromady aby nebyli v tabulce dvojitě */
	}
	table th, table td {
		width: 30px;
		height: 30px;
	}
	table th {
		background-color: lightgreen;
	}
</style>




	
</body>
</html>