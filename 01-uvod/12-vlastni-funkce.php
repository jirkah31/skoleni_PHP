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
		function obvodKruhu($polomer){ //vytvoření vlastní fce, název fce "obvodKruhu" a do závorek () se napíšou hodnoty, které tato fce přijímá, do složených se pak napíše co tat funkce provádí
			$obvod = 2 * pi() * $polomer; //proměnná $obvod je pouze v localscopu této fce a nejde vypsat v global scopu
			return $obvod; //return se píše až úplně na konec, protože tím se ukončí provádění a to co je zaním už se neprovede
		}

		//zavolání fce
		$vysledek = obvodKruhu(5);
		var_dump($vysledek);
		echo "<br>";

		//VYTVOŘENÍ FCE NA PŘEPOČET TEPLOTY
		function celsiusNaFarenhite ($teplotaCelsius){
			$vysledekFarenheit = $teplotaCelsius * 1.8 + 32;
			return $vysledekFarenheit;
		}
		echo "vysledek přepočtu: ".celsiusNaFarenhite(10)."°F";


		//FUNKCE NA PROCHÁZENÍ POLE A VRACENÍ ZDA SE V POLI NACHÁZÍ HLEDANÁ POOŽKA
			function jeVPoli ($hledanaPolozka, $polozky){
				foreach($polozky as $polozka){
					if ($polozka == $hledanaPolozka){
						return true;
					}
				}
				return false;
			}

			//test
			$jmena = ["Franta", "Marie", "Jirka", "Karel","Marie", "Marie", ];
			var_dump($jmena);
			$jeTam = jeVPoli("Karel", $jmena);
			var_dump($jeTam);

			$jeTaNikola = jeVPoli("Nikola", $jmena);
			var_dump($jeTaNikola);

			//FUNKCE NA VÝPIS, KOLIKRÁT SE DANÁ POLOŽKA NACHÁZÍ V POLI
			function kolikratVpoli ($hledanaPolozka, $polozky){
				$pocetNalezeni = 0;
				foreach($polozky as $polozka){
					if ($polozka == $hledanaPolozka){
						$pocetNalezeni++;
					}
				}
				return $pocetNalezeni;
			}

			$jmena = ["Franta", "Marie", "Jirka", "Karel","Marie", "Marie", ];
			var_dump($jmena);
			//Kolikrát je v poli Marie
			$jeTam = kolikratVpoli("Marie", $jmena);
			var_dump($jeTam);
			//Kolikrát je v poli Nikola
			$jeTaNikola = kolikratVpoli("Nikola", $jmena);
			var_dump($jeTaNikola);


	?>
</body>
</html>