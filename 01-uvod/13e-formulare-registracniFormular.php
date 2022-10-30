<?php
	$jmeno = null;
	$vek = null;
	$pohlavi = null;
	$chyby = []; //pole určené pro zápis chyb, aby jsme je pak mohli zapsat a zkontrolovat
	$vseOK = null;
	$seznamPohlavi = [ // pole na to aby se nám vypisovala pohlaví s diakritikou a ne jako hodnoty value
		"muz" => "Muž",
		"zena" => "Žena",
		"jine" => "Jiné",
	]; 

	if (array_key_exists("zaregistrovat", $_POST))
	{
		$jmeno = $_POST["jmeno"];
		$vek = $_POST["vek"];
		$pohlavi = $_POST["pohlavi"];

		//kontrola chyb
		//kontrola jména
		if ($jmeno == "") {
			$chyby ["jmeno"] = "Musí být vyplněno"; //zapíše do pole $chyby hodnotu pro klíč "jmeno"
		} else if (mb_strlen($jmeno) < 3) {
			$chyby ["jmeno"] = "Jméno je příliš krátké";
		}

		//kontrola věku
		if ($vek == "") {
			$chyby ["vek"] = "Musí být vyplněno"; // zapíše do pole $chyby hodnotu pro klíč "vek"
		} else if (is_numeric($vek) == false) {
			$chyby ["vek"] = "Musí být číslo";
		} else if ($vek < 18) {
			$chyby ["vek"] = "Pouze pro dospělé";
		} else if ($vek > 100) {
			$chyby ["vek"] = "Chybný věk";
		} 

		//kontrola pohlaví
		if ($pohlavi == "")
		{
			$chyby ["pohlavi"] = "Zvolte pohlaví";
			
		} else if ($pohlavi != "zena") {
			$chyby["pohlavi"] = "Pouze pro ženy";
		}

		//kontrola správnosti všech údajů
		if (count($chyby) == 0) {
			$vseOK = true;
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
	<?php
	if ($vseOK == false) {
		?>
	
	<form action="" method="post">
		Jméno: <input type="text" name="jmeno" id="jmeno" value = "<?php echo $jmeno; ?>"> 

		<?php 
		if (array_key_exists("jmeno", $chyby)) { //zkontroluje, zda existuje chyba jméno, aby to neházelo chybu, když žádná chyba není
			echo $chyby["jmeno"];
		}

		
		?>
<br>
		Věk: <input type="text" name="vek" id="vek" value = "<?php echo $vek; ?>"> 
		<?php 
		if (array_key_exists("vek", $chyby)) { //zkontroluje, zda existuje chyba věk, aby to neházelo chybu, když žádná chyba není
			echo $chyby["vek"];
		}
		?>
		<br>
		Pohlavi: <select name="pohlavi" id="pohlavi">
			<option value="">Vyberte</option>
			<?php foreach ($seznamPohlavi as $klicPohlavi => $nazevPohlavi) { 
				$selected = "";
				if ($klicPohlavi == $pohlavi) { //toto je podmínka na to, aby nám zůstalo vypsané pohlaví pomocí selected
					$selected = 'selected';
				}
				echo "<option value = '$klicPohlavi' $selected>$nazevPohlavi</option>";
			}
			?>


<!--  	TOTO JE ZPŮSOB ŘEŠENÍ JAK TO UDĚLAT KDYŽ BUDE M,OŽNOSTÍ MÁLO, POKUD BY JICH BYLO VÍCE, TAK JE DOBRÉ DO VZÍT PŘES FOREACH VIZ NAHOŘE
			<option value="muz" <?php if($pohlavi == "muz"){echo "selected";} ?>>muž</option> -----(KOMENT aby zůstalo vybráno, musíme ošetřit podmíknou a parametrem selected (parametr select nebere parametr value)
			<option value="zena" <?php if($pohlavi == "zena"){echo "selected";}?>>žena</option>
			<option value="jine" <?php if($pohlavi == "jine"){echo "selected";}?>>jiné</option>
 -->

			
		</select> 
		<?php 
		if (array_key_exists("pohlavi", $chyby)) { //zkontroluje, zda existuje chyba pohlavi, aby to neházelo chybu, když žádná chyba není
			echo $chyby["pohlavi"];
		}
		?>
		<br>
		<button name="zaregistrovat">Zaregistrovat</button>
	</form>
	<?php } 
	else { // vše OK
		echo "Registrace proběhala úspěšně!";
		echo "<table border = 1>";
		echo "<tr> <th> jméno</th> <td>$jmeno</td><tr/>";
		echo "<tr> <th> věk</th> <td>$vek</td><tr/>";
		echo "<tr> <th> Pohlaví</th> <td>{$seznamPohlavi[$pohlavi]}</td><tr/> </table> <br>";

		echo "<form> <button>Zpět</button> </form>";
	} 
	?>
</body>
</html>