<?php
	session_start(); //založí úložiště (session na straně serveru) a odešle o tom informaci do cookie, používá se na citlivé informace jako přihlášení atd, kde údaje zůstanou na straně serveru a v cookie máme vygenerované úložiště s náhodnám kódem
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
	$_SESSION["uzivatel"] = "franta"; //uloží nám do pole session na serveru uzivatele jako frantu, pole pak mohu klasicky vyspat var_dump($_SESSION);
	?>
	nějaký obsah
</body>
</html>