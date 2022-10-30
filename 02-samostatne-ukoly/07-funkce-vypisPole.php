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
		function vypisTabulku ($nazevPole){
			echo "<table border=1>";
			foreach ($nazevPole as $klic1 => $udaje1) {
				echo "<tr>";
				foreach ($udaje1 as $udaje2) {
					echo "<td>$udaje2</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}

		$pole = [
			["Koza", 4],
			["Had", 0],
			["Kočka", 3],
		];
		vypisTabulku($pole);
		
		$pole = [
			["Česká republika", "Praha", 10700000],
			["Německo", "Berlín", 83240000],
			["Rusko", "Moskva", 144100000],
		];
		vypisTabulku($pole);
	?>
</body>
</html>