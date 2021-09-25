<html>
	
<meta charset="utf-8"/>
	
<style>
    body {
        background-color: #d1d5ee;
        font-family: Arial;
	}
</style>

<title>Calculator</title>

<hr>

						<!–– *** START OF TEMPERATURE CONVERTER *** ––>

<?php

$value1_a = $_POST['value1_a'];
$unit1_a = $_POST['unit1_a'];
$unit2_a = $_POST['unit2_a'];

if ($unit1_a === "fahrenheit" && $unit2_a === "kelvin") {
	$result1_a = ($value1_a - 32) * 5 / 9 + 273.15;
	$var1_a = "°F";
	$var2_a = " K";
} elseif ($unit1_a === "fahrenheit" && $unit2_a === "celsius") {
	$result1_a = ($value1_a - 32) * 5 / 9;
	$var1_a = "°F";
	$var2_a = "°C";
} elseif ($unit1_a === "kelvin" && $unit2_a === "celsius") {
	$result1_a = $value1_a - 273.15;
	$var1_a = " K";
	$var2_a = "°C";
} elseif ($unit1_a === "kelvin" && $unit2_a === "fahrenheit") {
	$result1_a = ($value1_a - 273.15) * 9 / 5 + 32;
	$var1_a = " K";
	$var2_a = "°F";
} elseif ($unit1_a === "celsius" && $unit2_a === "kelvin") {
	$result1_a = $value1_a + 273.15;
	$var1_a = "°C";
	$var2_a = " K";
} elseif ($unit1_a === "celsius" && $unit2_a === "fahrenheit") {
	$result1_a = ($value1_a * 9 / 5) + 32;
	$var1_a = "°C";
	$var2_a = "°F";
}

$result2_a = number_format($result1_a, 2);

if (is_null($value1_a)) {
	$result3_a = "";
} else {
	$result3_a = $value1_a.$var1_a." = ".$result2_a.$var2_a;
}

?>

<center>	
	<form method="POST" autocomplete="off">
		<br><b>Temperature Converter</b><br><br>
		<input required type="text" size="6" name="value1_a" required value="<?php echo $_POST['value1_a'] ?>">
		<select required name="unit1_a"><br>
			<option></option>
				<option value="fahrenheit">Fahrenheit</option>
			<option value="celsius">Celsius</option>
			<option value="kelvin">Kelvin</option>
		</select>
		to
		<select required name="unit2_a"><br>
			<option></option>
			<option value="fahrenheit">Fahrenheit</option>
			<option value="celsius">Celsius</option>
			<option value="kelvin">Kelvin</option>
		</select>
		<input type="submit"><br><br>
		<?php echo "$result3_a"; ?>
	</form>
</center>
	
						<!–– *** END OF TEMPERATURE CONVERTER *** ––>
	
<hr>
	
						<!–– *** START OF DISTANCE CONVERTER *** ––>
	
<?php

$value1_b = $_POST['value1_b'];
$unit1_b = $_POST['unit1_b'];
$unit2_b = $_POST['unit2_b'];

if ($unit1_b === "mile" && $unit2_b === "nauticalmile") {
	$result1_b = $value1_b / 1.151;
	$var1_b = "Miles";
	$var2_b = "Nautical Miles";
} elseif ($unit1_b === "mile" && $unit2_b === "kilometer") {
	$result1_b = $value1_b * 1.609;
	$var1_b = "Miles";
	$var2_b = "Kilometers";
} elseif ($unit1_b === "nauticalmile" && $unit2_b === "kilometer") {
	$result1_b = $value1_b * 1.852;
	$var1_b = "Nautical Miles";
	$var2_b = "Kilometers";
} elseif ($unit1_b === "nauticalmile" && $unit2_b === "mile") {
	$result1_b = $value1_b * 1.151;
	$var1_b = "Nautical Miles";
	$var2_b = "Miles";
} elseif ($unit1_b === "kilometer" && $unit2_b === "nauticalmile") {
	$result1_b = $value1_b / 1.852;
	$var1_b = "Kilometers";
	$var2_b = "Nautical Miles";
} elseif ($unit1_b === "kilometer" && $unit2_b === "mile") {
	$result1_b = $value1_b / 1.609;
	$var1_b = "Kilometers";
	$var2_b = "Miles";
}

$result2_b = number_format($result1_b, 2);

if (is_null($value1_b)) {
	$result3_b = "";
} else {
	$result3_b = $value1_b." ".$var1_b." = ".$result2_b." ".$var2_b;
}

?>
	
<center>
	<form method="POST" autocomplete="off">
		<br><b>Distance Converter</b><br><br>
		<input required type="text" size="6" name="value1_b" required value="<?php echo $_POST['value1_b'] ?>">
		<select required name="unit1_b"><br>
			<option></option>					<option value="mile">Miles</option>
			<option value="kilometer">Kilometers</option>
			<option value="nauticalmile">Nautical Miles</option>
		</select>
		to
		<select required name="unit2_b"><br>
			<option></option>
			<option value="mile">Miles</option>
			<option value="kilometer">Kilometers</option>
			<option value="nauticalmile">Nautical Miles</option>
		</select>
		<input type="submit"><br><br>
		<?php echo "$result3_b"; ?>
	</form>
<center>
	
						<!–– *** END OF DISTANCE CONVERTER *** ––>
	
<hr>
	
						<!–– *** START OF SPEED CONVERTER *** ––>

<?php

$value1_c = $_POST['value1_c'];
$unit1_c = $_POST['unit1_c'];
$unit2_c = $_POST['unit2_c'];

if ($unit1_c === "mile" && $unit2_c === "nauticalmile") {
	$result1_c = $value1_c / 1.151;
	$var1_c = "Miles per hour";
	$var2_c = "Knots";
} elseif ($unit1_c === "mile" && $unit2_c === "kilometer") {
	$result1_c = $value1_c * 1.609;
	$var1_c = "Miles per hour";
	$var2_c = "Kilometers per hour";
} elseif ($unit1_c === "nauticalmile" && $unit2_c === "kilometer") {
	$result1_c = $value1_c * 1.852;
	$var1_c = "Knots";
	$var2_c = "Kilometers per hour";
} elseif ($unit1_c === "nauticalmile" && $unit2_c === "mile") {
	$result1_c = $value1_c * 1.151;
	$var1_c = "Knots";
	$var2_c = "Miles per hour";
} elseif ($unit1_c === "kilometer" && $unit2_c === "nauticalmile") {
	$result1_c = $value1_c / 1.852;
	$var1_c = "Kilometers per hour";
	$var2_c = "Knots";
} elseif ($unit1_c === "kilometer" && $unit2_c === "mile") {
	$result1_c = $value1_c / 1.609;
	$var1_c = "Kilometers per hour";
	$var2_c = "Miles per hour";
}

$result2_c = number_format($result1_c, 2);

if (is_null($value1_c)) {
	$result3_c = "";
} else {
	$result3_c = $value1_c." ".$var1_c." = ".$result2_c." ".$var2_c;
}

?>
	
<center>
	<form method="POST" autocomplete="off">
		<br><b>Speed Converter</b><br><br>
		<input required type="text" size="6" name="value1_c" required value="<?php echo $_POST['value1_c'] ?>">
		<select required name="unit1_c"><br>
			<option></option>					<option value="mile">Miles per hour</option>
			<option value="kilometer">Kilometers per hour</option>
			<option value="nauticalmile">Knots</option>
		</select>
		to
		<select required name="unit2_c"><br>
			<option></option>
			<option value="mile">Miles per hour</option>
			<option value="kilometer">Kilometers per hour</option>
			<option value="nauticalmile">Knots</option>
		</select>
		<input type="submit"><br><br>
		<?php echo "$result3_c"; ?>
	</form>
<center>

						<!–– *** END OF SPEED CONVERTER *** ––>

<hr>

</html>
