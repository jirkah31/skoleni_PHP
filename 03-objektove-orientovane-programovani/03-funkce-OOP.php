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
		class Produkt {
			public $nazev;
			public $cena; //bez DPH
			public $dph;

			function cenaSDPH() { //funkce se nadefinuje uvnitř objektu, ke kterému se vztahuje
				return $this->cena * (1 + $this->dph/100); //proměnná $this představuje instanci, kterému objektu byla tato funkce volaná, musí být vytvořena uvnitř classy, aby se dla this použít
			}
		}

		$telefon = new Produkt();
		$telefon ->nazev = "Samsung";
		$telefon ->cena = 10000;
		$telefon ->dph = 21;

		echo "Cena telefonu s DPH: ";
		echo $telefon->cenaSDPH(); //díky proměnné this se takto zavolá do fce cenaSDPH a do ní se hodí $telefon a vrátí to výsledek
	?>
</body>
</html>