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

	class ChybaMaloPenez extends Exception
	 {

	 }

	 class ChybaSpatnaCastka extends Exception
	 {
		
	 }

	class Kasa {
		protected $pocetPenez; 

		function __construct()
		{
			$this->pocvetPenez = 0;
		}

		function vloz($castka)
		{
			$this->pocetPenez += $castka; 
		}

		function vyber($castka)
		{ 
			if ($castka <= 0) {
				return 2; //v podstatě označuje číslo chyby, tak aby se v tom dalo vyznat, kde je zakopanej pes
			}
			if ($castka > $this->pocetPenez) {
				$chyba = new Exception("V kase není dost peněz");
				throw $chyba;
			} else {
				$this -> pocetPenez -= $castka;
				return 0;
			}
		}
	}

	$pokladna = new Kasa();
	var_dump($pokladna);

	$pokladna -> vloz(100);
	$pokladna -> vloz(50);
	var_dump($pokladna);

	$pokladna ->vyber(80); 

	try { //try říká, že uvnitř tohoto bloku může nastat vyjímka
		$pokladna ->vyber(500); //může tady být více případů
	}
	catch (ChybaMaloPenez $chyba) { //chybu si ukládám do $chyba
		echo "V kase není dost peněz";
	} catch (ChybaSpatnaCastka $chyba) { //chybu si ukládám do $chyba
		echo "zadal jsi špatnou častku";
	}
	catch (Exception $chyba) { //chybu si ukládám do $chyba
		echo "Nepodařil ose vybrat pěníze";
		echo $chyba; //vypíše cestu k chybě
	}
	?>
</body>
</html>