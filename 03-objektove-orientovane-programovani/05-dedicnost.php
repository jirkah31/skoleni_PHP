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
		class Product {
			public $nazev;
			public $cena;

			function __construct($nazev, $cena){
				$this -> nazev = $nazev;
				$this -> cena = $cena;
			}
		}

		class Televize extends Product { //třída telecize je potomek (rozšiřuje třídu Product)
			//automaticky obsahuje vlastnosti třídy Product -> nazev a cena
			public $uhlopricka;
			public $rozliseni;

			function __construct($nazev, $cena, $uhlopricka, $rozliseni){ //tento cunstruct přebije ten rodičovský, protože je více konkrétní
				parent::__construct($nazev, $cena); //aby jsme nemuseli kopírovat celé nastavení rodičovského constructu, tak se na to používá tento zápis
				$this -> uhlopricka = $uhlopricka;
				$this -> rozliseni = $rozliseni;
			}
		}

		class Vrtacka extends Product{
			public $vykon;
		}

		$telka = new Televize("Samsung", 10000, '40"', "4k"); // __construct automaticky podědí i extendované classy
		var_dump($telka);

		$vrtacka = new Vrtacka("Bosh", 2000);

		var_dump($vrtacka);
?>
</body>
</html>