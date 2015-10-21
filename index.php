<!doctype html>
<html lang="en">
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<form method="GET" action="step2.php">
		<div id="wrapper">			
			<table border="1" cellpadding="6">
				<caption>Student Registration Form</caption>
				<tr>
					<td>First name</td>
					<td>Middle name</td>
					<td>Last name</td>
				</tr>
				<tr>
					<td><input type="text" name="fname" required /></td>
					<td><input type="text" name="mname" required /></td>
					<td><input type="text" name="lname" required /></td>
				</tr>
			</table>
			<input type="submit" name="register-btn" value="Proceed to Step2" />
		</div>
	</form>
</body>
</html>