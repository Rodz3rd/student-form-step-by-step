<?php
	define('FNAME', $_GET['fname']);
	define('MNAME', $_GET['mname']);
	define('LNAME', $_GET['lname']);

	$name = $_GET['fname']
?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<form method="GET" action="step3.php">
		<div id="wrapper">			
			<table border="1" cellpadding="6">
				<caption>Student Registration Form</caption>
				<tr>
					<td>First name</td>
					<td>Middle name</td>
					<td>Last name</td>
				</tr>
				<tr>
					<td><input type="text" name="fname" value="<?php echo $name; ?>" readonly /></td>
					<td><input type="text" name="mname" value="<?= MNAME; ?>" readonly /></td>
					<td><input type="text" name="lname" value="<?= LNAME; ?>" readonly /></td>
				</tr>
				<tr>
					<td colspan="3">
						Gender: <input type="radio" value="Male" name="gender" checked /> Male
								<input type="radio" value="Female" name="gender" /> Female
					</td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Proceed to Step3" />
		</div>
	</form>
</body>
</html>