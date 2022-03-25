<!-- 17707 - IT ELPHP1   
CEMPRON, TRISHA ANN E. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>M2-Checkboxes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <form method="GET" action="M2-Checkboxes.php"">
            Enter 1st no.: 
            <input type="number" name="num1" /><br><br>
            Enter 2nd no.: 
            <input type="number" name="num2" /><br><br>
            <p>Choose operation(s)</p>
            <p>
                <input type="checkbox" name="opt[]" value="add" /> Addition
            </p>
            <p>
                <input type="checkbox" name="opt[]" value="sub" /> Subtract
            </p>
            <p>
                <input type="checkbox" name="opt[]" value="mult" /> Multiplication
            </p>
            <p>
                <input type="checkbox" name="opt[]" value="div" /> Division
            </p>
            <button type="submit" name="compute">Compute</button>
    </form>
    <?php
       $num1;
       $num2;
       $opt;

       //check if the user has clicked the calculate button
        if(isset($_GET["compute"])){
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
			
			//this checks if the user clicked at least one checkbox
			if(isset($_GET["opt"])){
				$opt = $_GET["opt"];
				echo"<br />";
				//this checks if the user inputted two numbers
				if($num1 != null && $num2 != null){

					for($i=0; $i<count($opt); $i++){
						//displays the answers if the condition is satisfied in every operation
						if($opt[$i]=="add"){
							echo"The sum of $num1 and $num2 is: ", $num1+$num2;
							echo"<br />";
						}
						elseif($opt[$i]=="sub"){
							echo"The difference of $num1 and $num2 is: ", $num1-$num2;
							echo"<br />";
						}
						elseif($opt[$i]=="mult"){
							echo"The product of $num1 and $num2 is: ", $num1*$num2;
							echo"<br />";
						}
						elseif($opt[$i]=="div"){
							echo"The quotient of $num1 and $num2 is: ", $num1/$num2;
							echo"<br />";
						}
						else{
							echo"<p>You have modified the values and used an unknown operator, please try again</p>";
						}
					}
				}
				//this is displayed when the user forgets to input the two required variables
				else{
					echo"<p style='color:red'>Please input two numbers to compute</p>";}
			}
		}
    
    ?>
    </body>
</html>