<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>Grade Calculator</header>
        <form method="post">
            <label> <b>NB: A >=90 | B>=80 | C>=70 | D>=60 | F<60 </b></b></label><br><br>
            <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" required><br>
            
            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" required><br>
            
            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" required><br>
            
            <button class="button1" type="submit" value="Calculate">Submit</button>
            <button class="button2" type="reset" value="Calculate">Reset</button>
        </form>
<div id="average">
    <div id="grade">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];

            // Calculate the average score
            $average = ($score1 + $score2 + $score3) / 3;

            // Determine the corresponding grade
            if ($average >= 90) {
                $grade = 'A';
            } elseif ($average >= 80) {
                $grade = 'B';
            } elseif ($average >= 70) {
                $grade = 'C';
            } elseif ($average >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }

            echo "Average Score: " .number_format($average, 4)."<br>"."Letter Grade: $grade";
            
        }
        ?>
        </div>
        </div>
    </div>
</body>
</html>
