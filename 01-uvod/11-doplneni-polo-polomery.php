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
		$polomery = [];

		while (count($polomery)<20){
			$polomer = rand(1,50);
			//in_array zkontroluje zda se v poli nachází hodnota, která byla vygenerována
			if (in_array($polomer, $polomery)==false){ //pokud by nebylo zapsáno false, tak se dá fce znegovat vykřičníkem před ní, jinak to hodí true
				$polomery[] = $polomer;
				
			} else {
				
			}
			
		} 

		//DALŠÍ MOŽNOST
		/* $i = 1;
		while ($i <= 20){
			$polomer = rand(1,50);
			//in_array zkontroluje zda se v poli nachází hodnota, která byla vygenerována
			if (in_array($polomer, $polomery)==false){ //pokud by nebylo zapsáno false, tak se dá fce znegovat vykřičníkem před ní, jinak to hodí true
				$polomery[] = $polomer;
				$i++;
			} else {
				
			}
			
		} */


		// for($i = 1; $i <=20; $i++){ //tohle je takovej můj způsob, kdy se odečte počet když se to opakuje
		// 	$polomer = rand(1,50);
		// 	//in_array zkontroluje zda se v poli nachází hodnota, která byla vygenerována
		// 	if (in_array($polomer, $polomery)==false){ //pokud by nebylo zapsáno false, tak se dá fce znegovat vykřičníkem před ní, jinak to hodí true
		// 		$polomery[] = $polomer;
		// 	} else {
		// 		$i--;
		// 	}
			
		// }
		var_dump($polomery);

		echo "<table border=1>";
		echo "<tr> <th>Poloměr</th> <th>Obvod</th> </tr>";
			foreach($polomery as $polomer){
				$obvod = 2 * pi() * $polomer;
				$obvod = number_format($obvod, 2, ",", " ");
				echo "<tr> <th>$polomer</th> <th>$obvod</th> </tr>";
			}
		echo "</table>";
	?>
</body>
</html>