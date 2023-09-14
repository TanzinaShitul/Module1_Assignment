<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header>Even Odd Number Checker</header>
    <form method="post" action="even_odd_checker.php">
        Enter a number: <input type="number" name="number" required>
        <button class="button" type="submit" value="Check">submit</button>
    </form>
    <div id="number">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            
            if (is_numeric($number)) {
                if ($number % 2 == 0) {
                    echo "<p>$number is an even number.</p>";
                } else {
                    echo "<p>$number is an odd number.</p>";
                }
            } else {
                echo "<p>Please enter a valid number.</p>";
            }
        }
    ?>
    </div>
    </div>
</body>
</html>
