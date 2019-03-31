<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	for ($i=1; $i < 4; $i++) { 
		# code...
		for ($j=1; $j < 4; $j++) { 
			# code...

			if ($i == 2 && $j == 1) {
				# code...
				echo "Breaks inner loop when i = $i and j = $j<br>";
				break;
			}
			if ($i == 1 && $j == 1) {
				# code...
				echo "Continues inner loop when i = $i and j = $j<br>";
				continue;
			}
			echo "Running i = $i and j = $j <br>";
		}
	}
?>
</body>
</html>