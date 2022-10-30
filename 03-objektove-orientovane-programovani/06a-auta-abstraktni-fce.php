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
//PŘIDÁME DO DABULKY STÁŘÍ VOZU POMOCÍ FCE
	abstract class Auto {
		public $znacka;
		public $rokVyroby;

		function __construct($znackaVozu, $rokVyrobyVozu) //pro přehlednost se dává __construct, na začátek za proměnné
		{
			$this -> znacka = $znackaVozu; //samozžejmě mohou se jmenovat stejně, ale pro přehlednost jsem si to napsal
			$this -> rokVyroby = $rokVyrobyVozu; //POPIS: u $this objektu na místo(->) rokVyroby přiřazuji(=) hodnotu proměnné $rokVyrobyVozu
		}

		function stariVozu(){
			return date("Y")-$this->rokVyroby;
		}

		abstract function dotankuj();
	}

	class Elektromobil1 extends Auto {
		public $kapacitaBaterie;

		function __construct($znackaVozu, $rokVyrobyVozu, $kapacitaBaterie)
		{
			parent::__construct($znackaVozu, $rokVyrobyVozu);
			$this -> kapacitaBaterie = $kapacitaBaterie;
		}

		function dotankuj(){
			echo "Baterie dobita!";
		}
	}

	class SpalovaciVuz1 extends Auto {
		public $palivo;

		function __construct($znackaVozu, $rokVyrobyVozu, $palivo)
		{
			parent::__construct($znackaVozu, $rokVyrobyVozu);
			$this -> palivo = $palivo;
		}

		function dotankuj(){
			echo "Palivo dotankováno!";
		}
	}

	//nadefinujeme to pro srovnání jako klasické POLE
		$auto1 = new Elektromobil("Tesla", 2020, 80);
		$auto1 -> dotankuj();
		echo"<br>";

		$auto2 = new SpalovaciVuz("Range Rover", 2019, "benzín");
		$auto2 -> dotankuj();
		echo"<br>";
	
		$auta = [$auto1, $auto2];
		var_dump($auta);

		//vypsání POLE $auta do tabulky (klasika toto není OOP (obějktově orientované programování ))
		echo "<table border=1>";
		echo "<tr> <th>Znařka</th> <th>Rok výroby</th> <th>Stáří vozu</th> </tr>";
		foreach($auta as $auto){
			echo "<tr> <td> {$auto -> znacka}</td> <td>{$auto -> rokVyroby}</td>  <td> {$auto -> stariVozu()}</td></tr>"; //výpis podobnej jako u pole jen trochu jinej zápis
		}
		echo "</table>";
	?>
</body>
</html>