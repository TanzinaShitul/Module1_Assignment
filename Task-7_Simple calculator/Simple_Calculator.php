<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator</title>
    <style>
 
</style>
</head>
<body>
    <div class="container">
    <header>Simple Calculator</header>  
    
            <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter the first number"style="color:green" required ><br>
            <input type="number" name="num2" placeholder="Enter the second number" style="color:green" required><br>

            <select name="operation" id="operatn" style="color:gray" required>
                <option value="" disabled selected hidden  >Select Operation</option>
                <option value="add" style="color:green">Addition</option>
                <option value="subtract" style="color:red">Subtraction</option>
                <option value="multiply"style="color:blue" >Multiplication</option>
                <option value="divide" style="color:teal"  >Division</option>
                <option value="binary" style="color:black">Binary Conversion</option>
                <option value="octal"style="color:orange">Octal Conversion</option>
                <option value="hexadecimal"style="color:purple">Hexadecimal Conversion</option>
            </select><br>

            <button class="button1" type="submit">Calculate</button>
            <button class="button2" type="reset">Reset</button>
            
            </form>
            <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result: $result";
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: $result";
                        } else {
                            echo "Cannot divide by zero.";
                        }
                        break;
                    case "binary":
                        echo "Binary value of {$num1} is : " . decbin($num1)."<br>";
                        echo "Binary value of {$num2} is : " . decbin($num2);
                        break;
                    case "octal":
                        echo "Octal value of {$num1} is : " . decoct($num1)."<br>";
                        echo "Octal value of {$num2} is : " . decoct($num2);
                        
                        break;
                    case "hexadecimal":
                        echo "Hexadecimal value of {$num1} is : " .strtoupper(dechex($num1))."<br>";
                       echo "Hexadecimal value of {$num2} is : " .strtoupper(dechex($num2));
                        break;
                    
                }
            }
        
            ?>
        </div>
    </div>

</body>
</html>
