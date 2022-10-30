<?php
session_start();

$nahodneCislo = null;
$cisloSudaLicha = null;
$vypisHra = null;
$vybrano = null;
$sazka = null;

/* $kontrola = $_SESSION["stavKonta"];
echo "kotkrala konta = $kontrola";
 */
if(array_key_exists("stavKonta", $_SESSION)==false){
	$_SESSION["stavKonta"] = 100;
	$stavKonta = $_SESSION["stavKonta"];
}
	
$stavKonta = $_SESSION["stavKonta"];
if (array_key_exists("zatocit", $_POST)) {

	$sazka = $_POST["sazka"];
	$vybrano = $_POST["vybrano"];
	if ($sazka > 0 && $_POST["vybrano"] != "") { //podmínka zadané sázky a barvy
		$nahodneCislo = rand(1, 36);
		
		 //vybrání sudé nebo liché
		if ($nahodneCislo % 2 == 0) { 	// rozhodnutí číslo sudé nebo liché
			$cisloSudaLicha = "suda";
		} else {
			$cisloSudaLicha = "licha";
		}

		if (array_key_exists("vybrano", $_POST)) {  //rozhodnutí výhra nebo prohra
			$stavKonta = $_SESSION["stavKonta"];

			if ($cisloSudaLicha == $_POST["vybrano"]) {
				$_SESSION["stavKonta"] = $stavKonta + $sazka;
				$vypisHra = "Výhra!!!";
				$stavKonta = $_SESSION["stavKonta"];
			} else {
				$_SESSION["stavKonta"] = $stavKonta - $sazka;
				$vypisHra = "Prohra. :-(";
				$stavKonta = $_SESSION["stavKonta"];
			}
		}
	} else {
		$sazka = $_POST["sazka"];
		$vybrano = $_POST["vybrano"];
		$stavKonta = $_SESSION["stavKonta"];
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
	<h1>Ruleta</h1>

	<?php
	echo "<h2 class ='vedleSebe'>Padlo číslo&nbsp</h2><h2 class='nahodneCislo'>$nahodneCislo</h2>";

	if ($cisloSudaLicha == $vybrano) {
		echo "<h2 style='color:green'>$vypisHra</h2>";
	} else {
		echo "<h2 style='color:red'>$vypisHra</h2>";
	}

	echo "<h2>Stav konta: $stavKonta Kč</h2>"; //STAV KONTA
	?>
	<form method='post'>
		Sázka: <input type='number' name='sazka' id='sazka' value='<?php echo $sazka ?>'>Kč <br>

		Sudé / Liché: <select name='vybrano' id='vybrano'>
			<option value=''>Vyberte</option>
			<option value='suda' <?php if ($vybrano == "suda") {
										echo "selected";
									} ?>>Sudá</option>
			<option value='licha' <?php if ($vybrano == "licha") {
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