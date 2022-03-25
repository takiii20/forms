<!-- 17707 - IT ELPHP1   
CEMPRON, TRISHA ANN E. -->

<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>M1-DROPDOWN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="GET" action="M1-Dropdown.php">
            Enter 1st no.: 
            <input type="number" name="num1" /><br><br>
            Enter 2nd no.: 
            <input type="number" name="num2" /><br>
            <p>Choose an operation:
            <select name="operation">
                <option value="add">Addition</option>
                <option value="sub">Subtract</option>
                <option value="mult">Multiplication</option>
                <option value="div">Division</option>                
            </select>
            </p>
            <button type="submit" name="compute">Compute</button>
        </form>

    <?php
        $num1;
        $num2;
        $operation;
        //$answer;

        //check if the user has clicked the calculate button
        if(isset($_GET["compute"])){
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
			$operation = $_GET["operation"];
			
			//this checks if the user inputted two numbers
			if($num1 != null && $num2 != null){
				if($operation == "add"){
					//$answer = $num1 + $num2;
					echo"The sum of $num1 and $num2 is: ", $num1+$num2;
				}
				else if($operation == "sub"){
					//$answer = $num1 - $num2;
					echo"The difference of $num1 and $num2 is: ", $num1-$num2;
				}
				else if($operation == "mult"){
					//$answer = $num1 * $num2;
					echo"The product of $num1 and $num2 is: ", $num1*$num2;
				}
				else if($operation == "div"){
					//$answer = $num1 / $num2;
					echo"The quotient of $num1 and $num2 is: ", $num1/$num2;
				}
				else{
					echo"<p>You have modified the values and used an unknown operator, please try again</p>";
				}
			}
			//this is displayed when the user forgets to input the two required variables
			else{
				echo"<p style='color:red'>Please input two numbers to compute</p>";}
        }

    ?>

    </body>
</html>