<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header>Weather Report</header>
    <form method="POST">
        Enter temperature: <input type="number" name="temperature" required>
        <button class="button1" type="submit" value="Check Weather">Check</button>
        <button class="button2" type="reset" value="Check Weather">Reset</button>
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $temperature = $_POST["temperature"];

        if ($temperature < 0) {
            echo "It's freezing!";
        } elseif ($temperature >= 0 && $temperature < 15) {
            echo "It's cool.";
        } elseif ($temperature >= 15) {
            echo "It's warm.";
        }
    }
    ?>
    </div>
</body>
</html>
