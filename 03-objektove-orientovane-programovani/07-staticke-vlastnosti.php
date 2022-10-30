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
		class Clovek
		{
			static $pocetLidiNaSvete = 0; //navišování této vlastnosti udělám pomocí constructoru, staická proměnná

			public $jmeno;
			public $vek;

			function __construct()
			{
				Clovek::$pocetLidiNaSvete++; //globální proměnná pocetLidiNaSvete, která je součástí třídy Clovek (zde mohu nahraditt Clovek také výrazem self)
			}

			static function kolikJeLidiNaSvete(){
				return self::$pocetLidiNaSvete; //self se odvolává sám na sebe, tedy na classu ve které je vytvořen
			}
		}

		$adam = new Clovek();
		$eva = new Clovek();

		echo "Počet lidi na světě: ".Clovek::$pocetLidiNaSvete; //vypíše počet lidí na světě(tady self nefunguje)
		echo "<br>";
		echo "Počet lidí na světě: ".Clovek::kolikJeLidiNaSvete(); //stejněj výpis jens se zavoláním fce (tady self nedunguje protože to nevím uvnitř jaké classy)
	?>
</body>
</html>