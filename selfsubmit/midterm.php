<!--
	17707 - IT ELECTIVE 2 (PHP PROGRAMMING 1)
	CEMPRON, TRISHA ANN E.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practical Midterm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

    </style>
</head>

<body>
    <div class="w3-panel w3-animate-top" style="width: 40%; margin: auto; padding-top: 100px;">
        <div class="w3-container w3-green" style="border-top-right-radius: 10px; border-top-left-radius: 10px; text-align:center;">
        <h2><b>Character checker</b></h2>
        </div>
        <div class="w3-cell-row" >
            
        <div class="w3-container w3-pale-green w3-cell" style="width: 50%; border-bottom-left-radius: 10px; padding-bottom: 20px;">
        <br>    
        <form method="GET" action="midterm.php">
                <label for="character">Enter a character: </label>
                <input type="text" maxlength="1" size="5" name="character" />

                <div style="text-align: center; padding-top: 20px">
                    <button type="submit" name="check" class="w3-button w3-green" style="border-radius: 10px;">Check</button>
                </div>
            </form>
        </div>
        <!--PHP PART-->
        <div class="w3-container w3-khaki w3-cell w3-padding" style="border-bottom-right-radius: 10px; text-align:center; ">
        <br>
            <?php
            $character;

            // Driver Code
            if(isset($_GET["check"])){
                $character = $_GET["character"];

                if ((ord($character) >= 65 && ord($character) <= 90)
                    || (ord($character) >= 97 && ord($character) <= 122)){
                        echo "'$character' is a letter ";
                    }
                    
                // CHECKING FOR DIGITS
                else if (
                    ord($character) >= 48 &&
                    ord($character) <= 57
                ){
                    echo "'$character' is a number ";
                }
                    

                // OTHERWISE SPECIAL CHARACTER
                else{
                    echo "'$character' is a special character ";
                }
            }

            ?>
        </div>
        <!---->
        </div>
    </div>
</body>

</html>