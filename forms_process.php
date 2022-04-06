<!DOCTYPE html>
<html>
	<head>
		<title>Handle Inputted Data</title>
	</head>
	<body>		
	<?php
		//declare variables
		$comment;
		$sex;
		$status;
		$colors;
		
		//check if the user has clicked the process button
		if(isset($_GET["process"])){
			//get the inputted data using their names from the other form
			$comment = $_GET["comment"];
			$sex = $_GET["sex"];
			$status = $_GET["status"];
			
			//check if there is atleast one selected color
			if(isset($_GET["colors"])){
				//get all the selected checkboxes colors
				$colors = $_GET["colors"];
				
				//display the selected colors in an unordered list format
				echo"<ul>";
				for($i=0; $i<count($colors); $i++){
					//display each color thru list item
					echo"<li>".$colors[$i] . "</li>"; //it needs a dot(.)
				}
				echo"</ul>";
			}
			else{
				echo"<p style='color: red'>Sorry, you did not select a color.</p>";
			}
			
			//display the comment inputted by the user placed inside 
			echo "<p>$comment</p>";
			echo "<p style='color:red; font-size:24px;'>".$comment."</p>";
			
			if($sex == "M"){
				echo"<p>You are a man.</p>";
			}
			elseif($sex == "F"){
				echo"<p>You are a woman.</p>";
			}
			else{
				echo"<p>Your sex cannot be identified</p>";
			}
			echo"<br />";
			echo "<p><b>Your status is : $status</b></p>";
		}
	?>
	</body>
</html>