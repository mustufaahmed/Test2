<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$yes = 'TRUE'; $no = 'FALSE';
	//AND operator
	$result = ($no && $no)? 'TRUE' : 'FALSE';
	echo "No AND No returns $result <br>";
	$result = ($yes && $no)? 'TRUE' : 'FALSE';
	echo "Yes AND No returns $result <br>";
	$result = ($no && $yes)? 'TRUE' : 'FALSE';
	echo "Yes AND Yes returns $result <br>";
	//OR operator
	$result = ($no || $no)? 'TRUE' : 'FALSE';
	echo "No OR No returns $result <br>";
	$result = ($yes || $no)? 'TRUE' : 'FALSE';
	echo "Yes OR No returns $result <br>";
	$result = ($yes || $yes)? 'TRUE' : 'FALSE';
	echo "Yes OR Yes returns $result <br>";
	$result = (!$yes)? 'TRUE' : 'FALSE';
	echo "NOT YEs returns $result <br>";
?>
</body>
</html>