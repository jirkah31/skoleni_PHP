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
		//podmínka IF - (provede první platnou podmínku, jinak provede else)
		$vek = 66;
		if($vek >= 18) {
			echo "Jsi dospělý";
		} else {
			echo "Nejsi dospělý";
			echo "<br>";
		} 
		echo "<br>";

		// úkol skloňování ve zybtku věku do kulatin
		$vek = 33;
		$vekZbytek = $vek % 10;
		$vekZbytek = $vek - $vekZbytek + 10;
		$vekZbytek = $vekZbytek - $vek;
		if ($vekZbytek == 1){
			echo "Do kulatých narozenin mi zbývá: ".$vekZbytek." rok!<br>";

		} else if ($vekZbytek >=2 && $vekZbytek <=4) {
			echo "Do kulatých narozenin mi zbývá: ".$vekZbytek." roky!<br>";

		} else { 
		echo "do kulatých anrozenin mi zbývá: ".$vekZbytek." let!";
		echo "<br>";
		}



		//RULETA - rozhodování sudé a liché číslo
		$number = rand(0, 100);
		$number = $number % 2;
		if($number == 0){
			echo "sudé číslo";
		} else {
			echo "liché číslo";
		}
		echo "<br>";
		echo rand(1, 100); //generování náhodných čísel
		//kdybychom chtěli generovat náhodně pohlaví a neznáme ještě "pole", kde se generuje náhodný výraz ze seznamu, tak lze použít generátor rand(1, 3) pro tři pohlaví
	?>
</body>
</html>