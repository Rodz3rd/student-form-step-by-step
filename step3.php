<?php 
	define('FNAME', $_GET['fname']);
	define('MNAME', $_GET['mname']);
	define('LNAME', $_GET['lname']);
	define('GENDER', $_GET['gender']);

	$months = ['January', 'February', 'March', 'April',
				'May', 'June', 'July', 'August',
				'September', 'October', 'November', 'December'];
	$current_year = date('Y');
 ?>

<!doctype html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<form method="GET" action="step4.php">
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
						Birthday:
						<select name="month" id="month" onchange="monthChange();">
							<?php foreach( $months as $key => $month ): ?>
							<option value="<?= $key+1; ?>"><?= $month; ?></option>
							<?php endforeach; ?>
						</select>
						
						<select name="day" id="day">
							<?php for( $day = 1; $day <= 31; $day++ ): ?>
							<option><?= $day; ?></option>
							<?php endfor; ?>
						</select>

						<select name="year" id="year" onchange="yearChange();">
						<?php for( $year = $current_year; $year >= 1980; $year-- ): ?>
							<option><?= $year; ?></option>
						<?php endfor; ?>
						</select>
					</td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Proceed to Step4" />
		</div>
	</form>

	<script type="text/javascript" src="js/date_auto_correct.js"></script>
</body>
</html>