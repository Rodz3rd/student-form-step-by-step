<?php 
	define('FNAME',  $_GET['fname']);
	define('MNAME',  $_GET['mname']);
	define('LNAME',  $_GET['lname']);
	define('GENDER', $_GET['gender']);
	define('BIRTHDATE', $_GET['birthdate'] );
	define('PROGRAM', $_GET['program']);
 ?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<form method="GET" action="step6.php">
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
						Program: <?= PROGRAM; ?>
						<input type="hidden" value="<?= PROGRAM; ?>" name="program" />
					</td>
				</tr>
				<tr class="student-type">
					<td colspan="3">
						Student Type: <br />
						<ul>
							<li><input type="radio" name="student-status" value="Full Scholar" checked /> Full Scholar</li>
							<li><input type="radio" name="student-status" value="Partial" /> Partial</li>
							<li><input type="radio" name="student-status" value="Payee" /> Payee</li>
						</ul>
					</td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Proceed to Step6" />
		</div>
	</form>

	<script type="text/javascript" src="js/date_auto_correct.js"></script>
</body>
</html>