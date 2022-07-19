<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grades</title>
</head>
<?php
$perc = $_POST['percentage'];
if ($perc <= 100) {
switch ($perc) {
	case $perc >= 90 : $grad = "Excellent"; break;
	case $perc >= 70 : $grad = "Very good"; break;
	case $perc >= 50 : $grad = "Good"; break;
	default : $grad = "Try again"; break;
};} else echo "Wrong input";

?>
<body>
	<form action="" method="post" id="grader">
		<p>
			<label>Enter the percentage:</label>
			<input type="number" name="percentage" value="<?php echo $perc; ?>">
			<input type="submit" name="submit">
		</p>
		<p>
			<label>Grade:</label>
			<input readonly="readonly" name="grade" value="<?php echo $grad; ?>">
		</p>
	</form>
</body>
</html>