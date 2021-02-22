<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	
	<form method="post" action="">

		<input type="text" name="fnum" id="fnum" placeholder="Enter First Number"><br>
		<select name="operation">
			<option selected>Select</option>
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="x">x</option>
			<option value="/">/</option>
		</select><br>
		<input type="text" name="snum" id="snum" placeholder="Enter Second Number">
		<br>
		<input type="submit" name="calc" value="=">
	</form>

	<?php
		if (isset($_POST['calc'])) {
			if (($_POST['fnum'] == "") || ($_POST['snum'] == "")) {
				echo "Value must not be empty.<br>";
			}elseif ((!is_numeric($_POST['fnum'])) || (!is_numeric($_POST['snum']))) {
				echo "It must be numeric value.<br>";
			}else {
				$first_num = $_POST['fnum'];
				$next_num = $_POST['snum'];
				$opt = $_POST['operation'];

				switch ($opt) {
					case '+':
						echo $first_num."+".$next_num."=".($first_num + $next_num);
						break;
					case '-':
						echo $first_num."-".$next_num."=".($first_num - $next_num);
						break;
					case 'x':
						echo $first_num."x".$next_num."=".($first_num * $next_num);
						break;
					case '/':
						if ($next_num == 0) {
							echo "Undefined!<br>";

						} else {
							echo $first_num."/".$next_num."=".($first_num / $next_num);
						}
						
						break;
					default:
						echo "Invalid Operator!";
						break;
				}
			}
		}


	?>
</body>
</html>