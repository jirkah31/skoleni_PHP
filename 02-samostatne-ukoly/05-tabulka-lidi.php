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
	$lidi = [
		0 => ["jmeno" => "Jirka", "pohlavi" => "muž"],
		1 => ["jmeno" => "Miša", "pohlavi" => "žena"], 
		2 => ["jmeno" => "Apolo", "pohlavi" => "muž"],
		3 => ["jmeno" => "Nikola", "pohlavi" => "žena"], 
		4 =>["jmeno" => "Nikola", "pohlavi" => "muž"], 
	];
		
		echo "<table border=1>";
		foreach($lidi as $index => $udaje){

			if($udaje['pohlavi'] == "muž"){
				$barvaPohlavi = "blue";
			} else {
				$barvaPohlavi = "red";
			}

			echo "<tr><th>{$udaje['jmeno']}</th> <th style='background-color:$barvaPohlavi'>{$udaje['pohlavi']}</th>";
		}
		echo "</table>";
	?>
	
</body>
</html>