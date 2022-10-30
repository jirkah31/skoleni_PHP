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
		//OPERÁTORY +, -, *, <, >, ==, === (kromně rovnosti porovnává i datový typ) !=, <=, >=, 

		//operator modulo - vrací zbytek po celočíselném dělení
		$cislo = 7;
		$zbytek = $cislo % 3;
		var_dump($zbytek);
		echo "<br>";

		$vek = 33;
		$vek++; //zvýšení čísla o jedna zkrácený zápis
		var_dump($vek);
		$vek += 3; //zvýšení/snížení čísla o libovolné číslo s operátorem +=
		var_dump($vek);
		echo "<br>";

		//operátor porovnání "==" nebo nerovná se "!="
		$jeMi40 = $vek == 40; //uloží do proměnné $jeMi40 hodnotu true/false
		var_dump($jeMi40);
		echo "<br>";

		//logický AND &&, logické OR ||
		$vek = 20;
		$pohlavi = "muž";
		$dospelyMuz = $vek >= 18 && $pohlavi =="muž";
		var_dump($dospelyMuz);
		echo "<br>";

		//negace - vrací obrácenou bool hodnotu true nebo false 
		echo "negace: ";
		$jsemDospely = true;
		$jsemDospely = !$jsemDospely;
		var_dump($jsemDospely);
		echo "<br>";

		// OPERÁTOR PRO LEPENÍ STRINGU na STRING "."
		echo "Aktuální rok: ";
		echo date("Y");
		echo "<br>";
		echo "Aktuální rok: ".date("Y");
		echo "<br>"; //NEBO V JENDOM STRINGU
		$rok = date("Y");
		echo "Aktuální rok: $rok";
		echo "<br>";

		//kolik let zbývá do celých narozenit
		$vek = 30;
		$vekZbytek = $vek % 10;
		echo $vekZbytek;
		$vekZbytek = $vek - $vekZbytek + 10;
		echo $vekZbytek;
		$vekZbytek = $vekZbytek - $vek;
		echo "do kulatých narozenin mi zbývá: $vekZbytek<br>"; //nebo
		echo "do kulatých anrozenin mi zbývá: ".$vekZbytek;
		echo "<br>";

		//jméno tučně slepením
		$jmeno = 'Jiří';
		$prijmeni = 'Hruška';
		echo '<b>'.$jmeno.' '.$prijmeni.'</b>';




?>
</body>
</html>