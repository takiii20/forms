<html>
	<head>
		<title>Compute Sum</title>
	</head>
	<body>
		<?php
			$num1;
			$num2;
			
			//if the user clicks the compute button
			if(isset($_GET["compute"])){
				//get all the inputted data 
				$num1 = $_GET["num1"];
				$num2 = $_GET["num2"];
				$sum = $num1+ $num2;
				
				echo "<p>Sum of $num1 and $num2 is $sum</p>";
				//echo "<a href='entry_form.php'>Go back</a>";
			}
		
		
		?>
		<a href="entry_form.php">Go back</a>
	</body>
</html>