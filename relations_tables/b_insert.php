<?php 
$connt=mysqli_connect("localhost","root","","company_database");

if(isset($_POST["subbtn"])){
    $name=$_POST['name'];
    // $email=$_POST['email'];
    $number=$_POST['number'];
    // insert query create here 
    $connt->query("call b_insert('$name','$number')");
      header("location: p_insert.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            box-sizing: border-box;
        }

        label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #555;
            display: block;
        }

        input[type="text"], input[type="tel"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            color: #333;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Product Form</h2>
        <form action="#" method="POST">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter product name" required>

            <label for="number">Product Contact:</label>
            <input type="tel" id="number" name="number" placeholder="Enter product brand" required>

            <input type="submit" value="Submit" name="subbtn">
        </form>
    </div>

</body>
</html>
