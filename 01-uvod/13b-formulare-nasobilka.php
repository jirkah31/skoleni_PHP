<?php
$velikostTabulky = null;
$chyba = null;
if (array_key_exists("odeslat", $_GET)) {
	$velikostTabulky = $_GET["velikostTabulky"];
	
	if ($velikostTabulky == "") {
		$chyba = "Musí být zadáno!";
	} 
	else if (is_numeric($velikostTabulky) == false) {
		$chyba = "Musí být číslo!";
	}
	else if ($velikostTabulky <= 0) {
		$chyba = "Musí být kladné!";
	}
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
	<form action="" method="get">
		Velikost: <input type="text" name="velikostTabulky" id="" value="<?php echo $velikostTabulky; ?>">
		<?php echo $chyba; ?>
		<button name="odeslat">Odeslat</button>
	</form>

	<?php

	if ($velikostTabulky != null && $chyba == null) { //ošetření, aby se tabulka generovala jen v případě, že je vše správně

		//TABULKA S MALOU NÁSOBILKOU
		echo "<table border=1px>";
		// obsah tabulky
		echo "<tr>";
		echo "<th></th>";

		for ($sloupec = 1; $sloupec <= $velikostTabulky; $sloupec++) {
			echo "<th>$sloupec</th>";
		}
		echo "</tr>";

		for ($radek = 1; $radek <= $velikostTabulky; $radek++) {
			echo "<tr>";
			echo "<th>$radek</th>"; //vertikální hlavička tabulky

			for ($sloupec = 1; $sloupec <= $velikostTabulky; $sloupec++) {
				$soucin = $sloupec * $radek;
				echo "<td>$soucin</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
	<style>
		table {
			border-collapse: collapse;
		}

		table th,
		table td {
			width: 30px;
			height: 30px;
			text-align: center;
		}

		table th {
			background-color: lightgreen;
		}
	</style>
</body>

</html>