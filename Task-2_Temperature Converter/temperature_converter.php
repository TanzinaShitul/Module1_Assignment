<!DOCTYPE HTML>

<html>
<head> 
      <title>Temp Conversion</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
  <body>
    <div class="container">
    <header>Temperature converter</header>

    <form name="tempConvert" method="POST">
    <label for="temperature">Temperature :</label>
    <input type="number" name="temperature" id="valueConvert" placeholder="Enter the Temperature" required><br>

    <label for= "convertType">Convert to :</label>
    <select name="convertType" style="color:gray" required>

    <option value="" disabled selected hidden"> Select a measurement types</option>
    <option value="celsiusToFahrenheit" style="color:orange" >Celsius To Fahrenheit </option>
    <option value="fahrenheitToCelsius" style="color:blue">Fahrenheit To Celsius</option>
    </select><br>

    <button class="button1" type="submit" name="btnConvert" id="btnConvert" value="Convert">submit</button>
    <button class="button2" type="reset" name="btnReset" id="btnReset" value="Reset">Reset</button>

</form>

<div id="result">
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversionType = $_POST["convertType"];
        $result = 0;
      
        if ($conversionType === "celsiusToFahrenheit") {
            $result = ($temperature * 9/5) + 32 ;
            $resultUnit ="&degF";
        } else {
            $result = ($temperature - 32) * 5/9;
            $resultUnit="&degC";
        }

        echo "<p>Result: " . number_format($result, 2) .$resultUnit. "</p>";
    }
    ?>
    </div>
</div>
</body>