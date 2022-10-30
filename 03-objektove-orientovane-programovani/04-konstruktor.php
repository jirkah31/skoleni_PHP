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
		class Clovek {
			public $jmeno;
			public $vek;

			function __construct($noveJmeno) //pokud zapíši do závorek proměnou, tak fce bude vyžadovat její zadání při vytváření objektu, tato proměnná se může jmenovat stejně jako public $jmeo, protože se na ní přistupuje jinak
			{
				echo "Narodil se človek<br>"; //vypíše se při vytvoření nové instance (jen pokud máme vytvořenou fci construct)
				$this->vek = 0; //při vytvoření nového objektu "Clovek", se automaticky zadá věk 0
				$this->jmeno = $noveJmeno; //určí, kam se má do objektu zapsat proměná $noveJmeno
			}
		}

		$adam = new Clovek("Adam"); //do závorky musím zadat hodnotu proměnné $noveJmeno
		var_dump($adam);

		$eva = new Clovek("Eva");
		var_dump($eva);


		
?>
</body>
</html>