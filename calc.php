<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple calculator via PHP</title>
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '0';
//if (is_numeric($first_num) && is_numeric($second_num)) {
switch ($operator) {
	case "+" : $result = $first_num + $second_num; break;
	case "-" : $result = $first_num - $second_num; break;
	case "*" : $result = $first_num * $second_num; break;
	case "/" : $result = $first_num / $second_num; break;
	};//};
?>

<body>
		<h3>Simple calculator via PHP</h3>
		<br>
		<form action="" method="post" id="simpcalc">
			<p>
				<label>First Number</label>
				<input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>">
				
			</p>
			<p>

				<label>Second Number</label>
				<input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>">
				
			</p>
			<p>
				<label>Choose operation</label>
				<br>
				<input type="submit" name="operator" value="+"/>
				<input type="submit" name="operator" value="-">
				<input type="submit" name="operator" value="*">
				<input type="submit" name="operator" value="/">
			</p>
			<p>
				<label>Result : </label>
				<input readonly="readonly" name="result" value="<?php echo $result; ?>">
			</p>
		</form>
</body>
</html>