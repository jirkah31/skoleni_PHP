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
	$pocetObyvatelPodleMesta = [ //textové klíče v poli musí být unikátní jinak poslední položka stejná přepíše tu předchozí
		"Praha" => 1000000, "Brno" => 400000, "Plzeň" => 270000, "Příbram" => 60000,
	];
	var_dump($pocetObyvatelPodleMesta);

	echo "Počet obyvatel Prahy: ";
	echo $pocetObyvatelPodleMesta["Praha"];
	echo "<br>";
	echo "Počet obyvatel Prahy: {$pocetObyvatelPodleMesta["Praha"]}"; //do jednoho echa to tady musí být do složených závorek aby php poznalo, kdej e začátek a konec

//přidání položky
	$pocetObyvatelPodleMesta["Domažlice"] = 10000;
	var_dump($pocetObyvatelPodleMesta);

	//odebrání položky
	unset($pocetObyvatelPodleMesta["Brno"]);
	var_dump($pocetObyvatelPodleMesta);

//procházení pole
	foreach ($pocetObyvatelPodleMesta as $mesto => $pocetObyvatel) {
		echo "Počet obyvatel v $mesto je $pocetObyvatel <br>";
	}
	echo "<br>";

//ÚKOL: zvířata a počet nohou
	$zvirataPocetNohou = ["slon" => 4, "had" => 0, "papoušek" => 2, "pavouk" => 8, "stonožka" => 100, "kráva" => 4,];

	echo "<table border=1>";
	echo "<tr> <th>Zvíře</th> <th>Počet nohou</th></tr>";
	foreach ($zvirataPocetNohou as $zvire => $pocetNohou) {
		echo "<tr><td>$zvire</td><td>$pocetNohou</td></tr>";
	}
	echo "</table>";
	echo "<br>";

//ÚKOL: seznam jmen ve městě (seznam v seznamu)
	$praha = ["Franta", "Jirka"];
	$brno = ["Marie", "Nikola"];

	$mesta = ["Praha" => $praha, "Brno" => $brno,];

	echo "<table border=1>";
	echo "<tr> <th>Město</th> <th>Lidi</th></tr>";
	foreach ($mesta as $mesto => $lidi) {
		echo "<tr><td>$mesto</td><td>"; //nelze zadat pouze $lidi a nechat to vypsat, protože to hází chybu, že se snažíme vypsat pole jako string, takže tam musí být další cyklus
		echo "<ul>";
		foreach ($lidi as $jmeno) {
			echo "<li>$jmeno</li> ";
		}
		echo "</ul>";
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<br>";

//ÚKOL: informace o městech (pole s více informacemi), kde chceme vypsat jen některé informace
//musím vytvořit několik polí, které budou obsahovat jednotlivé údaje o městu a pak to postupně vypsat do tabulky
	$mesta = [
		"Praha" => ["rozloha" => 496, "nadmořskaVyska" => 235, "pocetDomu" => 99456, "pocetUlic" => 5631,],
		"Brno" => ["rozloha" => 356, "nadmořskaVyska" => 156, "pocetDomu" => 56239, "pocetUlic" => 3269,],
	];
	echo "<table border=1>";
	echo "<tr> <th>Město</th> <th>Rozloha</th> <th>Počet domů</th> </tr>";
	 foreach($mesta as $mesto => $udaje) {
		//nezapomínat dávat v tomto případě to do složenejch závorek jinak mi to nepůjde a nepřijdu nato!!!!!!!!!!
		echo "<tr> 
			<td>$mesto</td>
			<td>{$udaje['rozloha']}</td> 
			<td>{$udaje['pocetDomu']}</td>
		</tr>";
	 }

	echo "</table>";
	?>
</body>

</html>