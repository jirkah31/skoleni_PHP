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
		$mesice = array("leden","únor","březen"); //číslování buňek je od nuly (0,1,2,...)
		$mesiceJinak =["leden","únor","březen"]; //toto je stejnej zápis jako nahoře (je odvozený z JS), jiná syntaxe, echo dokáže vypsat pouze konkrétní hodnotu ne celé pole

		var_dump($mesice); //vypíše celé pole

		echo $mesiceJinak[1];

		//přidání položky do pole
		$mesice[] = "duben";
		$mesice[] = "květen"; //přepsání položky na určité pozici se pak událá, tak že do [] napíšeme číslo pozice, kterou chceme přespat
		var_dump($mesice);

		//odebrání položky
		unset($mesice[1]); //položka bude odebrána včetně svého indexu
		var_dump($mesice);
		echo "<br>";

		//procházení všechny položky pole
		foreach($mesice as $index => $mesic){
			echo "$index je číslo indexu v poli pro měsíc: $mesic<br>";
		}
		echo "<br>";

		//zkrácená syntaxe pro proměnou s klíčem
		foreach($mesice as $mesic) {
			echo "$mesic<br>";
		}
		echo "<br>";

		//tabulka města
		$mesta = ["Praha", "Brno", "Olomouc", "Plzeň"];
		echo "<table border=1>";
		echo "<tr><th>Města</th></tr>";
		foreach($mesta as $mesto){
			echo "<tr><td>$mesto</td></tr>";
		}
		echo "</table>";

		//seznam lidí
		$lidi = ["Jirka", "Misa", "Apolo", "Tomaš",]; //na konci může být i čátka za posledním, aby se to lépe kopírovalo, php to vezme
		echo "<ol>";
		foreach($lidi as $clovek){
			echo "<li>$clovek</li>";
		}
		echo "</ol>";
	?>
</body>
</html>