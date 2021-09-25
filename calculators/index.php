<html>
	
<style>
    body {
        background-color: #d1d5ee;
        font-family: Arial;
	}
	
	.center{
		float:center;
	}
</style>

<title>Calculator</title>

<hr><br>
	
						<!–– *** START OF PERCENT CHANGE CALCULATOR *** ––>

<?php

$value1_a = $_POST['value1_a'];
$value2_a = $_POST['value2_a'];
$result_a = 100 * ($value2_a - $value1_a) / $value1_a;
$result2_a = number_format($result_a, 3);

if ($result_a < 0 ) {
$plus_sign_a = "";
} else {
$plus_sign_a = "+";
}

if (is_nan($result_a)) {
$result2_a = "";
} else {
$result2_a = "Result: ".$plus_sign_a.$result2_a."%";
}

?>

<form method="POST" autocomplete="off">
	<div style="text-align: center;">
		<b>Percent Change Calculator</b><br><br>
    		<div style="display: inline-block; text-align: right;">
			Value 1: <input type="text" size="32" name="value1_a" value="<?php echo $_POST['value1_a'] ?>"><br>
			Value 2: <input type="text" size="32" name="value2_a" value="<?php echo $_POST['value2_a'] ?>"><br>
			</div>
		<input type="submit"><br><br>
		<?php echo $result2_a; ?>
	</div>
</form>
	
						<!–– *** END OF PERCENT CHANGE CALCULATOR *** ––>
	
<hr><br>
	
						<!–– *** START OF APY CALCULATOR *** ––>
	
<?php

$value1_b = $_POST['value1_b'];
$value2_b = $_POST['value2_b'];

$result1_b = $value1_b / 100;
$result2_b = ($result1_b / $value2_b) + 1; 
$result3_b = pow($result2_b, $value2_b) - 1;
$result4_b = $result3_b * 100;
$result5_b = number_format($result4_b, 2);

if ($result5_b > 0 ) {
	$result6_b = "APY: ".$result5_b."%";
} else {
	$result6_b = "";
}

?>

<form method="POST" autocomplete="off">
	<div style="text-align: center;">
		<b>Annual Percentage Yield (APY) Calculator</b><br><br>
    		<div style="display: inline-block; text-align: right;">
				Annual Rate (APR): %<input required type="text" size="6" name="value1_b" required value="<?php echo $_POST['value1_b'] ?>"><br>
				Compound: <select required name="value2_b"><br>
				<option value="365">Daily</option>
				<option value="52">Weekly</option>
				<option value="12">Monthly</option>
				</select>
			</div>
		<input type="submit"><br><br>
		<?php echo "$result6_b"; ?>
	</div>
</form>
	
						<!–– *** END OF APY CALCULATOR *** ––>
	
<hr>

</html>
