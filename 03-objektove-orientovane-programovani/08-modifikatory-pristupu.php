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
	class Kasa {
		protected $pocetPenez; //na protected může přistupovat třída poděděná, ale pokud by to bylo privete, tak nemůže přistupovat ani třída poděděná

		function __construct(){
			$this->pocvetPenez = 0;
		}

		function vloz($castka){
			$this->pocetPenez += $castka; //nastavení vložení peněz
		}

		function vyber($castka){ //vybraná částka nesmí být větší než zůstatek v pokladně
			if ($castka > $this->pocetPenez) {
				echo "V kase není dost peněz";
			} else {
				$this -> pocetPenez -= $castka;
			}
		}
	}

	$pokladna = new Kasa();
	var_dump($pokladna);

	//vložit stovku
	//$pokladna -> pocetPenez += 100; // jakmile je pocetPenez nastaveno na protected, tak to vyhazuje chybu,že chci nastavit vlastnost na kterou nemám přístup
	$pokladna -> vloz(100);
	var_dump($pokladna);

	//vybrat dvě stovky
	//$pokladna -> pocetPenez -= 200;

	$pokladna ->vyber(200); //pokud se pokusím vybrat více pěněz než je v pokladně, tak mi to vypíše to echo a úpd tím mi to napíše stav až by se to odečetlo
	var_dump($pokladna);
	?>
</body>
</html>