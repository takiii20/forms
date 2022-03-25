<html>
	<head>
		<title>Process Demo</title>
	</head>
	<body>
		<?php
			$fullname;
			$comment;
			$sex;
			$status;
			
			//if the user clicks the save button
			if(isset($_GET["save"])){
				//get the inputted fullname
				$fullname = $_GET["fullname"];
				
				//get the inputted comment
				$comment = $_GET["comment"];
				
				//get the inputted sex
				$sex = $_GET["sex"];
				
				//check if the user has selected a  status
				if(isset($_GET["status"])){
					//if so
					$status = $_GET["status"];
				}
				echo "<p>Fullname: $fullname</p>";
				echo "<p>Comment: $comment</p>";
				echo "<p>Sex: $sex</p>";
				echo "<p>Status: $status</p>";
			}
		?>
	</body>
</html>