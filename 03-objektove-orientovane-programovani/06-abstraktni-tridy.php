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
abstract class GeometrickyUtvar { //musím udělat i abstraktní třídu, nelze vytvářet instance
	abstract function obvod(); //abstraktní fce
}

class Ctverec extends GeometrickyUtvar {
	public $a;

	function obvod() {
		return 4 * $this -> a;
	}
}

class Obdelnik extends GeometrickyUtvar {
	public $a;
	public $b;

	function obvod() {
		return 2 * ($this -> a + $this -> b);
	}
}

class Kruh extends GeometrickyUtvar {
	public $r;

	function obvod() {
		return 2 * pi() * $this->r;
	}
}

$kruh = new Kruh();
$kruh->r = 10;
echo "Obvod kruhu: {$kruh->obvod()}";

?>
</body>
</html>