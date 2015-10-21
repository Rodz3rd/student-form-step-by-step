<?php 
	define('FNAME',  $_GET['fname']);
	define('MNAME',  $_GET['mname']);
	define('LNAME',  $_GET['lname']);
	define('GENDER', $_GET['gender']);
	define('BIRTHDATE', $_GET['month'] . "-" . $_GET['day'] . "-" . $_GET['year']);
 ?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<form method="GET" action="step5.php">
		<div id="wrapper">			
			<table border="1" cellpadding="6">
				<caption>Student Registration Form</caption>
				<tr>
					<td>First name</td>
					<td>Middle name</td>
					<td>Last name</td>
				</tr>
				<tr>
					<td><input type="text" name="fname" value="<?= FNAME; ?>" readonly /></td>
					<td><input type="text" name="mname" value="<?= MNAME; ?>" readonly /></td>
					<td><input type="text" name="lname" value="<?= LNAME; ?>" readonly /></td>
				</tr>
				<tr>
					<td colspan="3">
						Gender: <?= GENDER; ?>
						<input type="hidden" value="<?= GENDER; ?>" name="gender" />
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Birthday: <?= BIRTHDATE; ?>
						<input type="hidden" value="<?= BIRTHDATE; ?>" name="birthdate" />
					</td>
				</tr>
				<tr>
					<td colspan="3">
						Program:
						<select name="program">
							<option>Bachelor Of Arts In Broadcasting</option>
							<option>Bachelor Of Science In Accountancy</option>
							<option>Bachelor Of Science In Accounting Technology</option>
							<option>Bachelor Of Science In Information System</option>
							<option>Associative Computer Technology</option>
							<option>Office Management</option>
							<option>Nursing Assistant</option>
							<option>Office Management</option>
							<option>Mass Communication Technology</option>
							<option>Internation Cookery</option>
						</select>
					</td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Proceed to Step5" />
		</div>
	</form>

</body>
</html>