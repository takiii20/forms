<!-- 17707 - IT ELPHP1   
CEMPRON, TRISHA ANN E. -->

<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M1-DROPDOWN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-panel w3-animate-top" style="width: 30%; margin: auto; padding-top: 100px;">
        <div class="w3-container w3-teal" style="border-top-right-radius: 10px; border-top-left-radius: 10px; text-align:center;">
            <h3>Basic Calculator</h3>
        </div>

        <div class="w3-container w3-white w3-card-4">

            <form method="GET" action="M1-Dropdown.php" style="padding-top: 30px;">
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
                <div style="text-align: center;">
                    <button type="submit" name="compute" class="w3-button w3-green" style="border-radius: 10px;">Compute</button>
                </div>

            </form>
        </div>
        <div class="w3-container w3-pale-green w3-card-4" style="padding-top: 10px; padding-bottom: 20px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
            <?php
            $num1;
            $num2;
            $operation;

            //check if the user has clicked the calculate button
            if (isset($_GET["compute"])) {
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                $operation = $_GET["operation"];

                //this checks if the user inputted two numbers
                if ($num1 != null && $num2 != null) {
                    if ($operation == "add") {
                        echo "The sum of $num1 and $num2 is: ", $num1 + $num2;
                    } else if ($operation == "sub") {
                        echo "The difference of $num1 and $num2 is: ", $num1 - $num2;
                    } else if ($operation == "mult") {
                        echo "The product of $num1 and $num2 is: ", $num1 * $num2;
                    } else if ($operation == "div") {
                        echo "The quotient of $num1 and $num2 is: ", $num1 / $num2;
                    } else {
                        echo "<p>You have modified the values and used an unknown operator, please try again</p>";
                    }
                }
                //this is displayed when the user forgets to input the two required variables
                else {
                    echo "<p style='color:red'>Please input two numbers to compute</p>";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>