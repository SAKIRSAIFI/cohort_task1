<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="registration-form">
		<h1>Registration Form</h1>
		<form action="register.php" method="post">
			<label>Username:</label>
			<input type="text" id="username" name="username">

			<label>Email:</label>
			<input type="email" id="email" name="email">

			<label>Password:</label>
			<input type="password" id="password" name="password">

			<label>Confirm Password:</label>
			<input type="password" id="confirm-password" name="confirm-password">

			<button type="submit">Register</button>
		</form>
	</div>
</body>
</html>
