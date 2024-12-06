<?php 
$connt = mysqli_connect("localhost", "root", "", "student_info");

if (!$connt) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert Action
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $department = $_POST['department'];
    $round = $_POST['round'];
    $course = $_POST['course'];

    $insert_query = "INSERT INTO info (name, email, number, department, round, coursename) VALUES ('$name', '$email', '$number', '$department', '$round', '$course')";

    if (mysqli_query($connt, $insert_query)) {
        header("Location: student_info.php"); // Redirect after insert
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($connt);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student Info</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #bfa0f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Insert Student Information</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="number">Phone Number:</label>
        <input type="number" id="number" name="number" required>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required>

        <label for="round">Round:</label>
        <input type="number" id="round" name="round" required>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>

        <button type="submit" name="insert">Insert</button>
    </form>
</body>
</html>
