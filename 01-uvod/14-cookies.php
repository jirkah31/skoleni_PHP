<?php
setcookie("velikost", "xxl", strtotime("+1 year")) //cookie má tři parametry - název cookiny, hodnota a doba expirace v závisloti na čase od roku 1997 (tady nastaveno na + 1 rok)
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
	Obsah stránky

	<?php
		var_dump($_COOKIE); //vypíše cookie/přečte a je to ve formátu pole

		echo "velikosti cookie: $_COOKIE[velikost]"; //klasicky si přečteme z pole
	?>
</body>
</html>