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
	$i= 1;
	while ($i <= 10) { //provádí se do té doby dokud je splněna podmínka a nebo pokud je podmínka špatně definována, tak se může provádět do nekonečna
		echo "$i <br>";
		$i++;
	}

	//ZVYŠOVÁNÍ NADPISU O JEDNU ÚROVEŇ a vypsání
	$cislo = 1;
	while($cislo <= 6){
		echo "<h$cislo>H$cislo</h$cislo>";
		$cislo++;
	}

	//MNOŽENÍ MYŠÍ V AUSTRÁLII
	$pocetMysi = 2;
	$rok = 1;
	while($pocetMysi <= 3000000) {
		$pocetParu = $pocetMysi / 2;
		$prirustek = $pocetParu * 8;
		$pocetMysi += $prirustek; //neboli $pocetMysi = $prirustek + $pocetMysi;
		echo "Rok $rok - $pocetMysi <br>";
		$rok++;
	}

	//TABULKA S MYŠIMA
	$pocetMysi = 2;
	$rok = 1;
	echo "<table border 1px>";
	echo "<tr> <th>Rok</th> <th>Počet myší</th> </tr>";
	while($pocetMysi <= 3000000) {
		$pocetParu = $pocetMysi / 2;
		$prirustek = $pocetParu * 8;
		$pocetMysi += $prirustek; //neboli $pocetMysi = $prirustek + $pocetMysi;
		echo "<tr> <th>$rok</th> <td>$pocetMysi</td> </tr>";
		$rok++;
	}

	echo "</table>";




?>

</body>
</html>