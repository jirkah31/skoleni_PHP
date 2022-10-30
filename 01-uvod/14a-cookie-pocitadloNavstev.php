<?php
 //pokud uživatel navstivil stránku poprvé, tak mu vytvoříme cookie s počítadlem
	if (array_key_exists("pocitadlo", $_COOKIE)== false) {
		setcookie("pocitadlo", 1, strtotime("+1 year")); //říkáme prohlížeči, aby si nastavil "pocitadlo" =1, ale my to potřebujeme už mít nastavený u sebe na serveru proto ten další řádek, kde nastavuju do pole $_COOKIE 1
		$_COOKIE["pocitadlo"] = 1;
	} else { //toto je opakovaná návštěva
		$_COOKIE["pocitadlo"]++; //zvýší počítadlo o jedna
		setcookie("pocitadlo", $_COOKIE["pocitadlo"], strtotime("+1 year")); //zapíše to do cookie
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	nejaky obsah

	<?php
		if($_COOKIE["pocitadlo"] == 1){
			echo "<h1>Vítej nový návštěvníku </h1>";
		} else if ($_COOKIE["pocitadlo"] == 10){
			echo "<h1>Vaše desátá návštěva</h1>";
		}
	?>
</body>
</html>