<?php
$soucet = null;
$cislo1 = null;
$cislo2 = null;

if (array_key_exists("secist", $_GET)) {
	$cislo1 = $_GET["cislo1"];
	$cislo2 = $_GET["cislo2"];

	$soucet = $cislo1 + $cislo2;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		input {
			width: 60px;
		}
	</style>
</head>

<body>
	<form action="" method="get">
		Součet: <input type="number" name="cislo1" value="<?php echo $cislo1 ?>">
		+
		<input type="number" name="cislo2" value="<?php echo $cislo2 ?>">
		=
		<?php
		echo $soucet;
		?>
		<button name="secist">Sečíst</button>
	</form>
</body>

</html>