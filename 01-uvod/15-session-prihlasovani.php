<?php
session_start();
$chyba = null;


$uzivatele = [ //pole registrovaných uživatelů
	"franta" => "heslo",
	"karel" => "tajne",
];

if(array_key_exists("prihlasit", $_POST)){ //odešle přihlašovací formulář a uloží se mi $jmeno a $heslo, co zadal
	$jmeno = $_POST["jmeno"]; 
	$heslo = $_POST["heslo"];

	$uzivatelExistuje = array_key_exists($jmeno, $uzivatele); //provede se kontrola za mezi uživateli existuje zadaný uživatel
	if($uzivatelExistuje && $uzivatele[$jmeno] == $heslo){ //podmínka zkontroluje uživatelovo heslo v poli $uzivatele
		//uživatel zadal platné údaje
		$_SESSION["prihlasenyUzivatel"] = $jmeno;  //uloží nám do pole session na serveru uzivatele a můžeme s ním dále pracovat
		header("Location: ?"); //přesměrování, aby se neodeslal znova formulář
	} else {
		//neplatné přihlášení
		$chyba = "Nesprávné přihlašovací údaje!";
	}
}

//odhlášení uživatele

if (array_key_exists("odhlasit", $_POST)){
	unset($_SESSION["prihlasenyUzivatel"]); //vymaže konkrétníhjo uživatele, pozor nevymazat si celý pole uživatelů
	header("Location: ?"); //přesměrování, aby se neodeslal znova formulář
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
	if(array_key_exists("prihlasenyUzivatel", $_SESSION) == false) //podmínka, která ošetří, že se přihlašovací formulář zobrazí jen, když není uživatel přihlášen
	{ ?>
		
		<form action="" method="post">
			Jméno: <input type="text" name="jmeno" id=""> <br>

			Heslo: <input type="password" name="heslo" id=""> <br>

			<button name="prihlasit">Přihlásit</button>
		</form>

		<?php 
	} else {
		//sekce pro přihlášené uživatele
		echo "Jsi přihlášen jako:".$_SESSION["prihlasenyUzivatel"];  //zde by nefungovala proměnná $jmeno, protože je v localscopu pro ověření, musím si proto sahnout na server do session

		//odhlášení
		echo "<form method = 'post'>
			<button name = 'odhlasit'>Odhlásit</button>
			</form>";
	
	}
		echo $chyba;
	?>
</body>
</html>