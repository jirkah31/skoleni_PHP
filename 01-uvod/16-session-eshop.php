<?php
session_start();

if (array_key_exists("kosik", $_SESSION) == false) {
	$_SESSION["kosik"] = []; //můžeme si ho vypsat var_dump($_SESSION);
}

$produkty = [
	"RI038b3" => ["nazev" => "iPhone 13 Pro 128GB grafitově šedá", "cena" => 28990],
	"SMTR511b2" => ["nazev" => "Motorola Moto G32 6GB/128GB červená", "cena" => 4999],
	"RI032b2" => ["nazev" => "iPhone 12 64GB černá", "cena" => 16490],
];

//zpracování tlačítka přidat
if (array_key_exists("pridat", $_POST)) {
	$kodProduktu = $_POST["pridat"];
	//echo $kodProduktu;
	if (array_key_exists($kodProduktu, $_SESSION["kosik"]) == false) {
		$_SESSION["kosik"][$kodProduktu] = 1;
	} else {
		$_SESSION["kosik"][$kodProduktu]++;
	}
	header("Location: ?"); //přesměrování, aby se mi při refreshi znova nepřičítala další položka
}

//odebrání položky - tlačítko
if (array_key_exists("odebrat", $_POST)) {
	$kodProduktu = $_POST["odebrat"];
	$_SESSION["kosik"][$kodProduktu]--;
	if ($_SESSION["kosik"][$kodProduktu] == 0) {
		unset($_SESSION["kosik"][$kodProduktu]);
	}
	header("Location: ?"); //přesměrování, aby se mi při refreshi znova nepřičítala další položka
}

//zpracování tlačítka vysypat
if(array_key_exists("vysypat", $_POST)){
	$_SESSION["kosik"] = [];
	header("Location: ?");
}

function cenaProduktu ($cena) { //fce na formátování ceny, kterou budeme volat
	return number_format($cena, 0, ",", " ")." Kč";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Document</title>
</head>

<body>
	<h1>Nabídka produktů</h1>
	<?php
	//var_dump($_POST);
	echo "<table border=1>";
	echo  "<tr><th>Název</th> <th>Cena</th> <th></th></tr>";
	foreach ($produkty as $kodProduktu => $infoOproduktu) {
		echo "<tr>
			
				<td> {$infoOproduktu["nazev"]}</td>
				<td>".cenaProduktu($infoOproduktu["cena"])."</td>
				<td> 
					<form method = 'post'>
						<button name = 'pridat' value = '$kodProduktu'> <i class='fa-solid fa-cart-shopping'></i> </button>
					</form>
				</td>
				</tr>";
	}
	echo "</table>";
	?>

	<h1>Obsah košíku</h1>

	<?php
	if(count ($_SESSION["kosik"]) > 0) { 
	echo "<table border = 1>";
	$celkovaCena = 0;
	foreach ($_SESSION["kosik"] as $kodProduktu => $mnozstvi) {
		echo "<tr>
				<td>$mnozstvi x {$produkty[$kodProduktu]["nazev"]}</td>
				<td> 
					<form method = 'post'>
						<button name = 'odebrat' value = '$kodProduktu'><i class='fa-solid fa-trash-can'></i></button>
					</form>
				</td>
				</tr>";
				$cenaProduktu = $produkty[$kodProduktu]["cena"];
				$celkovaCena += $cenaProduktu * $mnozstvi;
	}
	echo "</table>";

	echo "<h2>Celková cena: ".cenaProduktu($celkovaCena)."</h2>";

	//talčítko na vysypání košíku
	echo "<form method = 'post'>
	<button name = 'vysypat'>Vysypat</button>
	</from>";


} else {
	echo "Prázný";
}

	?>
</body>

</html>