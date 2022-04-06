<!--
	17707 - IT ELECTIVE 2 (PHP PROGRAMMING 1)
	CEMPRON, TRISHA ANN E.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Multiplication Table</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		table, td {
			border: 1px solid;
			border-collapse: collapse;
			margin: auto;
			padding: 5px;
		}

		button {
			border: 0;
			padding: 8px;
		}

		body {
			background-color: lightgrey;
		}
	</style>
</head>

<body>
	<div class="w3-panel w3-animate-top" style="width:60%; margin: auto; padding-top: 100px;">
		<div class="w3-container w3-blue" style="border-top-right-radius:10px; border-top-left-radius: 10px; text-align:center;">
			<h2><b>Multiplication Table</b></h2>
		</div>
		<div class="w3-cell-row ">
			<div class="w3-container w3-white w3-cell " style="width: 45%; border-bottom-left-radius: 10px;">
				<form method="GET" action="M4-Multiplication_Table.php">
					<p>
						Enter Rows: <input type="number" name="row" />
					</p>
					<p>
						Enter Columns: <input type="number" name="col" />
					</p>
					<div class="container" style="margin: auto; padding-bottom: 16px;">
						<button type="submit" name="show" value="show" style="margin:auto; border-radius: 20px; width:30%; background-color:dodgerblue; color:white;">Show</button>
					</div>
				</form>
			</div>
			<div class="w3-container w3-light-blue w3-cell w3-padding" style="border-bottom-right-radius: 10px; text-align:center; ">
				<div class="container">
					<?php
					$col;
					$row;

					if (isset($_GET["show"])) {
						$col = $_GET["col"];
						$row = $_GET["row"];

						echo "<table>";
						for ($i = 1; $i <= $row; $i++) {
							echo "<tr>";
							for ($x = 1; $x <= $col; $x++) {
								echo "<td>" . ($i * $x) . "</td>";
							}
							echo "</tr>";
						}
						echo "</table>";
					}
					else{
					echo "<p style='color:red'>You have modified the value of the button, please try again.</p>";}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>