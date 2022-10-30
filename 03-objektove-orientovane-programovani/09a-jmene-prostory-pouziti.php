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
		//přístup do knihovny bude pomocí require nebo include

		require "09-jmene-prostory.php";

		$plachetnice = new \JmenoKnihovky\Vozidla\Lod(); //musím napsat celou cestu k třídě kterou chci založit, protože tam může být hafo tříd
		var_dump($plachetnice);

		use \JmenoKnihovky\Vozidla\Auto; //aliasem use říkám, že pokudkdekoliv napíšu Auto, tak to bude vědět, že to je uvnitř této knihovny

		$fabie = new Auto();
		var_dump($fabie);
	?>
</body>
</html>