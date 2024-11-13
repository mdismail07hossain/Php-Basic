<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maxnumber</title>
</head>
<body>
    <form method="post">
     Number1:   <input type="number" name="num1" id="num1" ><br><br>
     Number2:   <input type="number" name="num2" id="num2" ><br><br>
     Number3:   <input type="number" name="num3" id="num3" ><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the input values from the form
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            // Find the maximum number using max() function
            $maxNumber = max($num1, $num2, $num3);

            // Display the result
            echo "<h3>$num1 , $num2 , $num3 The maximum number is: $maxNumber</h3>";
        }
    ?>
</body>
</html>