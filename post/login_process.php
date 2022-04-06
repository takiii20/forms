<html>
	<head>
		<title>Login Process</title>
	</head>
	<body>
		<?php 
			$username = "";
			$password = "";
		
			if(isset($_POST["login"])){
				$username = $_POST["username"];
				$password = md5($_POST["password"]);
				
				echo"<p>Username: ".$username."</p>";
				echo"<p>Password: ".$password."</p>";
			}
		?>
	</body>
</html>