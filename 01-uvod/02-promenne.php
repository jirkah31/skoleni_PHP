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
		// PROMĚNNÉ;
		//proměnná typu STRING;
		$jmeno = 'Karel'; //string (text), pokud je něco uzavřeno do apostrofů, tak php nepřečte proměnné a tedy nepoužije jejich hodnotu a vypíše pouze název proměnné, proměnné čte pouze v uvozovká;
		echo $jmeno, "<br>";

		//proměnná INTEGER, proměnnou lze ohraničit složenými závorkami {$vek, $jmeno, atd};
		$vek = 37;
		echo "můj věk je : $vek<br>";

		//proměnná typu FLOUT / DOUBLE;
		$cenaPiva = 9.9;
		echo "cena piva je $cenaPiva Kč<br>"; //pokud bych chtěl vypsat rovnou za proměnou text musím ho dát do složených závorek;

		//proměnná typu BOOLEAN - (bool) - pouze true nebo false;
		$dneskaJePatek = true;
		//přes echo to vypíše pouze hodnoty "1" jako true a v případě false to nevypíše nic

		//k výpisu proměnné slouží funkce var_dump($promenna);
		var_dump($dneskaJePatek);
		echo "<br>";

		//proměnná bez hodnoty

		$cisloUctuVeSvycarsku = null; 

		//ÚKOL NA PROMĚNNÉ
			$vek = 25;
			$pohlavi = "muž"; 
			//v html je možné zapisovat hodntoy do uvozovek, do apostrofů nebo bez ohraničení pokud jsou bez mezer
			echo "<table border=1> 
						<tr>
							<th>Věk</th><td>{$vek}let</td>
						</tr>
						<tr>
							<th>Pohlaví</th><td>$pohlavi</td>
						</tr>
					</table><br> ";

	?>

	<!-- pro HTML takto -->
	<table border=1> 
						<tr>
							<th>Věk</th><td><?php echo $vek ?>let</td>
						</tr>
						<tr>
							<th>Pohlaví</th><td><?php echo $pohlavi ?></td>
						</tr>
					</table>

	
</body>
</html>