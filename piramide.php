<!DOCTYPE html>
<html>
<head>
	<title>Chess!</title>
	<link rel="stylesheet" type="text/css" href="piramid.css">
</head>
<body>
	<form method="POST">
		<input type="number" name="rows" placeholder="rows">
		<input type="number" name="cols" placeholder="cols">
		<input type="submit" name="submit">
	</form>
	<br>
	<?php
		if (isset($_POST["rows"]) && isset($_POST["cols"])){
		$rows = $_POST["rows"];
		$cols = $_POST["cols"];
		echo "<table>";
		for ($i=0; $i < $rows; $i++) { 
			echo "<tr>";
			for ($j=0;$j < $cols; $j++) {
				if ($i >= $j)
					echo "<td class='black'></td>";
//				elseif ($i % 2 == 0 && $j % 2 == 1)
//					echo "<td class='black'></td>";
				else
					echo "<td></td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
</body>
</html>