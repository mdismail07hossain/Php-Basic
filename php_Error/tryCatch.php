<?php

if(isset($_POST["btnSum"]) ){
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    sum($number1,$number2);
}
function sum($a, $b) {
    try {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new Exception("Both inputs must be numbers. <br>");
        }
        $result = $a + $b;
        echo "The sum of $a and $b is: $result <br>";
    }
    catch (Exception $error) {
        echo "Error: " . $error->getMessage() . "<br>";
    }
    finally {
        echo "The execution of the sum function is complete.<br>";
    }
}

// sum(10, 5);  
// sum(10, "abc");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Two Numbers</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            text-align: left;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .footer a {
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <section>
        <h2>Calculate Sum</h2>
        
        <!-- Error message example (visible when there's an error) -->
        <div class="error-message" style="display: none;">
            <strong>Error:</strong> Please enter valid numbers in both fields.
        </div>
        
        <form action="" method="post">
            <label for="number1">Number 1</label>
            <input type="text" name="num1" id="number1" required><br><br>
            <label for="number2">Number 2</label>
            <input type="text" name="num2" id="number2" required><br><br>
            <button type="submit" name="btnSum">Get Sum</button>
        </form>
        
        <div class="footer">
            <p>Designed with ❤️</p>
        </div>
    </section>

    <script>
        // Example of showing the error message when a validation fails
        const form = document.querySelector('form');
        const errorMessage = document.querySelector('.error-message');
        
        form.addEventListener('submit', function (event) {
            const num1 = document.querySelector('input[name="num1"]').value;
            const num2 = document.querySelector('input[name="num2"]').value;
            
            // Simple validation to check if the input values are numbers
            if (isNaN(num1) || isNaN(num2)) {
                event.preventDefault(); // Prevent form submission
                errorMessage.style.display = 'block'; // Show error message
            }
        });
    </script>
</body>
</html>