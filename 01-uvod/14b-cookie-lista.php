<?php

if (array_key_exists("potvrzuji", $_POST)){
	setcookie("souhlas", "1", strtotime("+ 1 year")); // nastavení cookie musí být před jakým koliv výpisem do stránky html, jinak to bude házet chybu
	$_COOKIE["souhlas"] = 1; //kvůli prodlevě musíme zase naplnit pole COOKIE, aby nám okno zmizelo hned
	header("Location: ?"); //toto nás přesměruje znovu na stejnou stránku, aby správně fungovala cookina a nevytvářela se automaticky sama, když jí smažeme a refreshneme stránku, "?" otazník vlastně říká abychom zůstali na stejné URL bez dalších parametrů (ty by byly zobrazeny za tím otazníkem)
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
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, provident omnis. Saepe, quaerat accusantium fuga mollitia consectetur quia neque ea sapiente laudantium nesciunt sed aliquam a rem molestiae? Quod molestias recusandae perferendis omnis, dolores ipsum quia enim sint nostrum quo ad nam accusantium ducimus deserunt consectetur dolorem sed eveniet consequatur minima maiores distinctio explicabo exercitationem! Non aspernatur sapiente fugit magnam possimus natus, eum dolores, unde minima impedit dicta saepe officia eius veritatis aut. Fuga inventore expedita voluptas nesciunt autem et beatae ad odit vero, animi quae soluta aliquam pariatur unde dolorem ratione minus quisquam non tempore. Temporibus beatae aliquid ratione.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, provident omnis. Saepe, quaerat accusantium fuga mollitia consectetur quia neque ea sapiente laudantium nesciunt sed aliquam a rem molestiae? Quod molestias recusandae perferendis omnis, dolores ipsum quia enim sint nostrum quo ad nam accusantium ducimus deserunt consectetur dolorem sed eveniet consequatur minima maiores distinctio explicabo exercitationem! Non aspernatur sapiente fugit magnam possimus natus, eum dolores, unde minima impedit dicta saepe officia eius veritatis aut. Fuga inventore expedita voluptas nesciunt autem et beatae ad odit vero, animi quae soluta aliquam pariatur unde dolorem ratione minus quisquam non tempore. Temporibus beatae aliquid ratione.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, provident omnis. Saepe, quaerat accusantium fuga mollitia consectetur quia neque ea sapiente laudantium nesciunt sed aliquam a rem molestiae? Quod molestias recusandae perferendis omnis, dolores ipsum quia enim sint nostrum quo ad nam accusantium ducimus deserunt consectetur dolorem sed eveniet consequatur minima maiores distinctio explicabo exercitationem! Non aspernatur sapiente fugit magnam possimus natus, eum dolores, unde minima impedit dicta saepe officia eius veritatis aut. Fuga inventore expedita voluptas nesciunt autem et beatae ad odit vero, animi quae soluta aliquam pariatur unde dolorem ratione minus quisquam non tempore. Temporibus beatae aliquid ratione.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, provident omnis. Saepe, quaerat accusantium fuga mollitia consectetur quia neque ea sapiente laudantium nesciunt sed aliquam a rem molestiae? Quod molestias recusandae perferendis omnis, dolores ipsum quia enim sint nostrum quo ad nam accusantium ducimus deserunt consectetur dolorem sed eveniet consequatur minima maiores distinctio explicabo exercitationem! Non aspernatur sapiente fugit magnam possimus natus, eum dolores, unde minima impedit dicta saepe officia eius veritatis aut. Fuga inventore expedita voluptas nesciunt autem et beatae ad odit vero, animi quae soluta aliquam pariatur unde dolorem ratione minus quisquam non tempore. Temporibus beatae aliquid ratione.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, provident omnis. Saepe, quaerat accusantium fuga mollitia consectetur quia neque ea sapiente laudantium nesciunt sed aliquam a rem molestiae? Quod molestias recusandae perferendis omnis, dolores ipsum quia enim sint nostrum quo ad nam accusantium ducimus deserunt consectetur dolorem sed eveniet consequatur minima maiores distinctio explicabo exercitationem! Non aspernatur sapiente fugit magnam possimus natus, eum dolores, unde minima impedit dicta saepe officia eius veritatis aut. Fuga inventore expedita voluptas nesciunt autem et beatae ad odit vero, animi quae soluta aliquam pariatur unde dolorem ratione minus quisquam non tempore. Temporibus beatae aliquid ratione.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, provident omnis. Saepe, quaerat accusantium fuga mollitia consectetur quia neque ea sapiente laudantium nesciunt sed aliquam a rem molestiae? Quod molestias recusandae perferendis omnis, dolores ipsum quia enim sint nostrum quo ad nam accusantium ducimus deserunt consectetur dolorem sed eveniet consequatur minima maiores distinctio explicabo exercitationem! Non aspernatur sapiente fugit magnam possimus natus, eum dolores, unde minima impedit dicta saepe officia eius veritatis aut. Fuga inventore expedita voluptas nesciunt autem et beatae ad odit vero, animi quae soluta aliquam pariatur unde dolorem ratione minus quisquam non tempore. Temporibus beatae aliquid ratione.</p>


	<?php if (array_key_exists("souhlas", $_COOKIE) == false) 
	{ //zjistíme zda v poli $_COOKIE existuje klíč s názvem "souhlas"
	?>

	<div class="lista">
		Používáním tohoto webu...
		<form action="" method="post">
			<button name = "potvrzuji">Beru na vědomí</button>
		</form>
	</div>

<?php } ?>

	<style>
		.lista {
			padding: 20px;
			height: 100px;
			position: fixed;
			bottom: 20px;
			left: 20px;
			right: 20px;
			background-color: lightgreen;
			border: 3px solid red;
			text-align: center;
		}

		p {
			width: 500px;
		}
	</style>
</body>

</html>