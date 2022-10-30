<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	nějaký obsah
	<br>
	Aktuální rok
	<br>
	<?php
	echo date("H:i:s");
	echo date("Y:M");
	echo "<br>"; 
	
	echo "<b>Jiří </b><i>Hruška</i>"; //pokud je to v php tagu musím to vypsat pomocí příkazu "echo", aby se to provedlo v HTML
	?>

	<?php
	// SPECIÁLNÍ ZNAKY
		echo "<table border=\"2\"></table> <br>" ; //znak obráceného lomítka "\" říká, že následující znak se v PHP nemá brát jako PHP znak a má kód číst dál, toto se jmenuje excape sekvence
		echo "\"Hello world\"";
		echo "<br>";
		echo "C:\\\\Documents\\zivotopis.doc ";
		echo "<br>";
		echo "<a href=\"https://www.mcdonalds.cz\"/>Mc Donalds</a>";
		echo '<br>';
	?>

	<?php
	// apostrof vs uvozovky - pokud píšu apostrofy, tak jako ukončující znak hledá apostrof a ne uvozovky, tím si isnadním život
		echo '10" table'; //nemusím označovat uvozovky obráceným lomítkem, pokud bude apostrof v textu tak ho pak musím vyloučit zpětným lomítek 
	?>

	<?php //PROMĚNNÉ - anglická písmena, čísla a podtržítka

	?>

</body>

</html>