<!-- 17707 - IT ELPHP1   
CEMPRON, TRISHA ANN E. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>M2-Radiobutton</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <form method="GET" action="M2-Radiobutton.php">
            Enter 1st no.: 
            <input type="number" name="num1" /><br><br>
            Enter 2nd no.: 
            <input type="number" name="num2" /><br><br>
            <p>Choose an operation: </p>
            <p>
                <input type="radio" name="opt" value="add" required />Addition
            </p>
            <p>
                <input type="radio" name="opt" value="sub" required />Subtraction
            </p>
            <p>
                <input type="radio" name="opt" value="mult" required />Multiplication
            </p>
            <p>
                <input type="radio" name="opt" value="div" required />Division
            </p>
            <button type="submit" name="compute">Compute</button>
    </form>
    <?php
        $num1;
        $num2;
        $opt;
        //$answer;

        //check if the user has clicked the calculate button
        if(isset($_GET["compute"])){
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
			$opt = $_GET["opt"];
			
			//this checks if the user inputted two numbers
			if($num1 != null && $num2 != null){
				if($opt == "add"){
					echo"<br />";
					echo"The sum of $num1 and $num2 is: ", $num1+$num2;
				}
				else if($opt == "sub"){
					echo"<br />";
					echo"The difference of $num1 and $num2 is: ", $num1-$num2;
				}
				else if($opt == "mult"){
					echo"<br />";
					echo"The product of $num1 and $num2 is: ", $num1*$num2;
				}
				else if($opt == "div"){
					echo"<br />";
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