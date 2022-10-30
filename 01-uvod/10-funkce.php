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
	$pocetVterin = time(); //počet vteřin od nulového času v roce 1997
	var_dump($pocetVterin);

	$cas = date("G:i:s"); //pro vypsání fce je nutné si jí uložit do proměnné
	echo $cas;
	echo"<br>";

	//další možnosti připočtení času k aktuálnímu času
	$timestampZahodinu = strtotime("+1 hour");
	$cas = date("G:i:s", $timestampZahodinu); 
	echo $cas;
	echo"<br>";

	$cas = date("G:i:s", $pocetVterin + 3600); //vypíše aktuální čas + hodina protože 3600s je jedna hodina, kterou přičítáme k aktuálnímu času
	echo $cas;
	echo"<br>";

	//ZAOKROUHLENÍ
	$cislo = 123456.789;
	$vysledek = round($cislo, -2); //-2, tak zaokrouhlí na stovky, 0 tak zaokrouhlí na celá čísla
	echo $vysledek;
	echo"<br>";

	//FORMÁTOVÁNÍ ČÍSLA
	echo number_format($cislo, 1, ",", " ");

	//délka stringu
	$slovo = "bagr";
	$delka = mb_strlen($slovo); //tato fce se zaměřuje na znaky, ale fce "strlen()" se zaměřuje na bajty a písměna s diakritikou označuje jako 2 bajty
	var_dump($delka);
	echo"<br>";

//VRACÍÍ ČÁST Z ÚRIVKU
	$uryvek = substr($slovo,0,1); //tato fuce počítá s bajty ale s předponou mb_ bude počítat znaky
	$uryvek = substr($slovo,0,2);
	echo $uryvek;
	echo"<br>";

//ÚKOL VELIKONOCE
	$aktualniRok = date("Y");
	echo "Aktuální rok: $aktualniRok";
	$pristiRok = $aktualniRok++;
	echo "<br>";
	echo "Příští rok: $pristiRok";
	$timestampVelikonoce = easter_date($pristiRok);
	var_dump($timestampVelikonoce);
	$datum = date("j.n", $timestampVelikonoce);
	echo "Velikonoce v roce $pristiRok budou $datum";
	echo "<br>";

//VÝPOČET OBVODU KRUŽNICE Z NÁHODNÉHO POLOMĚRU
	$polomer = rand(1,100);
	echo "<h1>Poloměr je: $polomer</h1> ";
	$obvod = 2 * $polomer * pi();
	$vysledek = round($obvod,2);
	echo "Obvod kružnice: $vysledek";
	echo "<br>";
	echo "<br>";

//POČET SLOVE VE VĚTĚ a výpis posledního slova 
	$veta = "skákal pes přes oves";
	echo "<h2>Věta: $veta<h/2>";
	$slova = explode(" ", $veta); //rozdělí větu na jednotlivá slova a umístí je do pole
	var_dump($slova);
	$pocetSlov = count($slova); //spočítá velikost pole
	echo "počet slov: $pocetSlov, ";
	echo "<br>";
	$posledniSlovo = $slova[($pocetSlov - 1)];
	echo "poslední slovo: $posledniSlovo"; 
	echo "<br>";
	// nebo lze použít funkci, ikterá vrací poslední místo v poli
	$posledniSlovoEnd = end($slova);
	echo "poslední slovo: $posledniSlovoEnd"; 

	?>
</body>
</html>