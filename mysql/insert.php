<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #5fa8d3;
            background-color: #fff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #5fa8d3;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #4a94c1;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

    </style>
</head>
<body>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="number">Number:</label>
        <input type="text" name="number" id="number" required>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>

        <input type="submit" name="btnsubmit" value="Submit">
    </form>

    <?php
    // require_once("connt.php");
    $conn=mysqli_connect("localhost","root","","company_database");
// if(!$conn){
//     die("Connections fialed");
// }else{
//     echo"<b style='color:green;'>Connections Successful</b>";
// }
    if (isset($_POST["btnsubmit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];

        // Prevent SQL injection
        // $name = mysqli_real_escape_string($conn, $name);
        // $email = mysqli_real_escape_string($conn, $email);
        // $number = mysqli_real_escape_string($conn, $number);
        // $address = mysqli_real_escape_string($conn, $address);

        $insertQuery = "INSERT INTO employees_info (name, email, number, address) VALUES ('$name', '$email', '$number', '$address')";

        if (mysqli_query($conn, $insertQuery)) {
            header("Location: mysql_conn2.php");
            exit();
        } else {
            echo "<p class='error'>Error: " . $insertQuery . "<br>" . mysqli_error($conn) . "</p>";
        }
    }
    ?>

</body>
</html>
