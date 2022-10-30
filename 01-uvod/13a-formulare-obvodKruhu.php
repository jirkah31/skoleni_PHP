<?php
$vysledek = null;
$chyba = null;
$polomer = null;
	if(array_key_exists("vypocitat", $_GET)){  //formulář byl odeslán
	$polomer = $_GET["polomer"];

		//kontrola chyb
		if($polomer == ""){
			$chyba = "Musí být vyplněno.";
			
		} else if ( is_numeric($polomer) == false ) {
			$chyba = "Musí být číslo";
		} else if ($polomer <= 0) {
			$chyba = "Záporné číslo";
		}
		else {
			$vysledek = 2 * pi() * $polomer;
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
	Poloměr: <input type="text" name="polomer" value = "<?php echo $polomer; ?>">
	
	<?php
	echo $chyba;
	?>

	<button name="vypocitat">Vypočítat</button>
	</form>

	<?php
	if($vysledek != null){
		echo "Obvod je: ".$vysledek;
	}
	
	?>
</body>
</html>