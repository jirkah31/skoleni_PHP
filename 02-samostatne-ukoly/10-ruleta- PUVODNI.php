<?php
$nahodneCislo = null;
$hra = "nepřepsalo se";
$cisloSudaLicha = "nezapsalo";
$stavKonta = null;
$_POST["sazka"] = null;
$vypisHra = null;

if (array_key_exists("zatocit", $_POST)) {
	$nahodneCislo = rand(1, 36);

	if ($nahodneCislo % 2 == 0) { 	//číslo sudé nebo liché
		$cisloSudaLicha = "suda";
	} else {
		$cisloSudaLicha = "licha";
	}
}

if (array_key_exists("vybrano", $_POST)) {  //výhra nebo prohra
	if ($cisloSudaLicha == $_POST["vybrano"]) {
		$hra = "vyhra";
		$vypisHra = "Výhra!!!";
	} else {
		$hra = "prohra";
		$vypisHra = "Prohra. :-(";
	}
}

if ($hra == "vyhra") { //výpočet stavu konta
	$stavKonta = $stavKonta + $_POST["sazka"];
} else {
	$stavKonta = $stavKonta - $_POST["sazka"];
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
	<h1>Ruleta</h1>

	<?php
	echo "<h2 class ='vedleSebe'>Padlo číslo&nbsp</h2><h2 class='nahodneCislo'>$nahodneCislo</h2>";

	if ($hra == "vyhra") {
		echo "<h2 style='color:green'>$vypisHra</h2>";
	} else {
		echo "<h2 style='color:red'>$vypisHra</h2>";
	}

	echo "<h2>Stav konta: $stavKonta Kč</h2>";
	?>
	<form method='post'>
		Sázka: <input type='number' name='sazka' id='sazka' value='50'>Kč <br>

		Sudé / Liché: <select name='vybrano' id='vybrano'>
			<option value=''>Vyberte</option>
			<option value='suda' <?php if ($cisloSudaLicha == "suda") {
										echo "selected";
									} ?>>Sudá</option>
			<option value='licha' <?php if ($cisloSudaLicha == "licha") {
										echo "selected";
									} ?>>Lichá</option>
		</select> <br>
		<button name='zatocit'>Zatočit ruletou</button>
	</form>


</body>
<style>
	.vedleSebe {
		display: inline-block;
	}

	.nahodneCislo {
		display: inline-block;
		color: orange;
	}
</style>

</html>