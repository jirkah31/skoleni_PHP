<?php
	session_start();
	$stavKonta = null;

	if(array_key_exists("zatocit", $_POST)){
		$sazka = $_POST["sazka"];
		echo $sazka;
		echo "<br>";
		$stavKonta = $_SESSION["stavKonta"];
		echo $stavKonta;
		$_SESSION["stavKonta"] = $stavKonta + $sazka;
		var_dump($_SESSION);
		
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
	<form action="" method = "post">
	<input type="number" name="sazka" id="">
	<button name="zatocit">zatocit</button>
	</form>

	<?php 
	echo $stavKonta;
	?>
</body>
</html>