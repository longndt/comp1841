<?php
if (!isset($_POST['val1'])) {
	//include your form template here
	include "templates/form.html.php";
} else {
	$val1 = $_POST['val1'];
	$val2 = $_POST['val2'];
	$calc = $_POST['calc'];

	//validate input data is number or text
	if ((!is_numeric($val1)) || (!is_numeric($val2))) {
		include "templates/error.html.php";
	} else {
		switch ($calc) {
			case "add":
				$result = $val1 + $val2;
				break;
			case "sub":
				$result = $val1 - $val2;
				break;
			case "mul":
				$result = $val1 * $val2;
				break;
			case "div":
				$result = $val1 / $val2;
				break;
			case "mod":
				$result = $val1 % $val2;
				break;
		}
		$output = "Calculation result: " . $result;
		//include your result template here
		include "templates/result.html.php";
	}
}
