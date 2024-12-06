<?php 
$connt = mysqli_connect("localhost", "root", "", "student_info");

if (isset($_GET["updateid"])) {
    $update_id = $_GET["updateid"];

    // Fetch the record to be updated
    $result = $connt->query("SELECT * FROM info WHERE id = $update_id");
    $row = $result->fetch_assoc();

    $name = $row['name'];
    $email = $row['email'];
    $number = $row['number'];
    $department = $row['department'];
    $round = $row['round'];
    $course = $row['coursename'];
}

if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $department = $_POST["department"];
    $round = $_POST["round"];
    $course = $_POST["course"];

    // Update the record
    $update_query = "UPDATE info SET 
        name='$name', 
        email='$email', 
        number='$number', 
        department='$department', 
        round='$round', 
        coursename='$course' 
        WHERE id=$update_id";

    if ($connt->query($update_query) === TRUE) {
        header("Location: student_info.php");
    } else {
        echo "Error updating record: " . $connt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Update Student Info</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <label for="number">Number:</label>
        <input type="text" id="number" name="number" value="<?php echo $number; ?>" required>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="<?php echo $department; ?>" required>

        <label for="round">Round:</label>
        <input type="number" id="round" name="round" value="<?php echo $round; ?>" required>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="<?php echo $course; ?>" required>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
