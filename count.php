<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show the numbers</title>
</head>
<?php
$start = $_GET['start'];
$top = $_GET['top'];
function cont($start, $top) {for ($a = 1; $start <= $top; $a++) {
	echo $start; echo '<br>'; $start++;
};};
$result = cont($start, $top);
echo $result;

/*echo "Another way :" . '<br>';
$newstart = 2;
$newtop = 12;
while ($newstart <= $newtop) {echo $newstart . '<br>'; $newstart++;};*/
?>
<body>
		<p>
			<form method="get">
				<p>
					<label>Number to start</label>
					<input type="number" name="start" id="start" value="<?php echo $start; ?>">
				</p>
				<p>
					<label>Number to finish</label>
					<input type="number" name="top" id="top" value="<?php echo $top; ?>">
				</p>
				<p>
					<input type="submit" name="submit">
				</p>
			</form>
		</p>
</body>
</html>
