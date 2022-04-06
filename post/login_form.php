<html>
	<head>
		<title>Login Form</title>
	</head>
	<body>
		<form method="POST" action="login_process.php">
			<p>
				<label for="username">Username: </label>
				<input type="text" name="username" maxlength="20" size="20" required />
			</p>
			<p>
			<label for="password">Password: </label>
			<input type="password" name="password" maxlength="20" size="20" required />
			</p>
			<button type="submit" name="login">LOGIN</button>
		</form>
		
	</body>
</html>