<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header>Comparison Tool</header>
    <form method="POST">
         <label>Number 1 :</label>
         <input type="number" name="number1" placeholder="Enter the number..." required><br>
         <label>Number 2 :</label>
         <input type="number" name="number2" placeholder="Enter the number..."required>

        <button class="button1" type="submit" value="Comparison Tool">Compare</button>
        <button class="button2" type="reset" value="Comparison Tool">Reset</button>
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $largerNumber=0;
        $largerNumber= ($number1 > $number2) ? $number1 : $number2 ;
        echo"The larger number is : ".$largerNumber;
    }
    ?>
    </div>
</body>
</html>
