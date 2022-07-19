<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>
<?php
$perc = 68;
if ($perc <= 100) {
switch ($perc) {
	case $perc >= 90 : $grad = "Excellent"; break;
	case $perc >= 70 : $grad = "Very good"; break;
	case $perc >= 50 : $grad = "Good"; break;
	default : $grad = "Try again"; break;
};} else echo "Wrong input";
echo $grad;
?>