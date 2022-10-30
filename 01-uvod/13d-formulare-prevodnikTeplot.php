<?php
$C = null;
$F = null;
$chybaF = null;
$chybaC = null;

//kontrala zdali bylo stisknuto tlačítko na C na F
if (array_key_exists("CnaF", $_GET)) {
	$C = $_GET["stupenC"];
	//kontrola chyb
	if ($C == "") {
		$chybaC = "Musí být vyplněno";
	} else if (is_numeric($C) == false) {
		$chybaC = "Musí být číslo";
	} else {
		$F = $C * 1.8 + 32;
	}
}

//kontrala zdali bylo stisknuto tlačítko na C na F

if (array_key_exists("FnaC", $_GET)) {
	$F = $_GET["stupenF"];
	if ($F == "") {
		$chybaF = "Musí být vyplněno";
	} else if (is_numeric($F) == false) {
		$chybaF = "Musí být číslo";
	} else {
		$C = ($F - 32) / 1.8;
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
		°C: <input type="text" name="stupenC" value="<?php echo $C ?>">
		<?php
		echo $chybaC;
		?>
		<button name="CnaF">-></button>
		<button name="FnaC"><-<;/button>
				°F: <input type="text" name="stupenF" value="<?php echo $F ?>">
				<?php
				echo $chybaF;
				?>

	</form>

</body>

</html>