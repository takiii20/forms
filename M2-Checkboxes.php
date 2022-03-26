<!-- 17707 - IT ELPHP1   
CEMPRON, TRISHA ANN E. -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M2-Checkboxes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-panel" style="width: 30%; margin: auto; padding-top: 100px;">
        <div class="w3-container w3-teal" style="border-top-right-radius: 10px; border-top-left-radius: 10px; text-align:center;">
            <h3>Basic Calculator</h3>
        </div>

        <div class="w3-container w3-white w3-card-4">

            <form method="GET" action="M2-Checkboxes.php" style="padding-top: 30px;">
                Enter 1st no.:
                <input type="number" name="num1" /><br><br>
                Enter 2nd no.:
                <input type="number" name="num2" /><br>
                <p>Choose operation(s):</p>
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
                <div style="text-align: center; padding-bottom: 20px">
                    <button type="submit" name="compute" class="w3-button w3-green" style="border-radius: 10px;">Compute</button>
                </div>
            </form>
        </div>
        <div class="w3-container w3-pale-green w3-card-4" style="padding-bottom: 20px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
            <?php
            $num1;
            $num2;
            $opt;

            //check if the user has clicked the calculate button
            if (isset($_GET["compute"])) {
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];

                //this checks if the user clicked at least one checkbox
                if (isset($_GET["opt"])) {
                    $opt = $_GET["opt"];
                    echo "<br />";
                    //this checks if the user inputted two numbers
                    if ($num1 != null && $num2 != null) {

                        for ($i = 0; $i < count($opt); $i++) {
                            //displays the answers if the condition is satisfied in every operation
                            if ($opt[$i] == "add") {
                                echo "The sum of $num1 and $num2 is: ", $num1 + $num2;
                                echo "<br />";
                            } elseif ($opt[$i] == "sub") {
                                echo "The difference of $num1 and $num2 is: ", $num1 - $num2;
                                echo "<br />";
                            } elseif ($opt[$i] == "mult") {
                                echo "The product of $num1 and $num2 is: ", $num1 * $num2;
                                echo "<br />";
                            } elseif ($opt[$i] == "div") {
                                echo "The quotient of $num1 and $num2 is: ", $num1 / $num2;
                                echo "<br />";
                                //catch if the user modified the value of an operator
                            } else {
                                echo "<p style='color:red'>Warning: You have modified the value of the operator, the numbers won't be computed</p>";
                            }
                        }
                    }
                    //this is displayed when the user forgets to input the two required variables
                    else {
                        echo "<p style='color:red'>Please input two numbers to compute</p>";
                    }
                    //if the user doesn't select atleast one. this is displayed
                } else {
                    echo "<p style='color:red'>Please choose at least one operation to compute</p>";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>