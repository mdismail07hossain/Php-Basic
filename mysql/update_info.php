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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            /* background: linear-gradient(135deg, #4caf50, #81c784); */
            background-color: 	#bfa0f9;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            max-width: 500px;
            width: 100%;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4caf50;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="number"], select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background: #f9f9f9;
            transition: all 0.3s ease-in-out;
        }
        input:focus {
            outline: none;
            border-color: #4caf50;
            background: #fff;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        button:hover {
            background-color: #388e3c;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }
            button {
                font-size: 14px;
            }
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
