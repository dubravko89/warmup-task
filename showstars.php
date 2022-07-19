<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Starshooter</title>
</head>
<?php
//calculator
$star = '*';
$nst = $_POST['nst'];

for ($row = 1; $row <= $nst; $row++) {
		$line = 1;
		while ($line <= $row) {echo $star; $line++;}; echo "<br>";
};

?>
<body>
	<p>
		<form method="post">
			<p>
			<label>Number of stars: </label>
			<input type="number" name="nst" id="nst" value="<?php echo $nst; ?>">
			</p>
		</form>
	</p>

</body>
</html>