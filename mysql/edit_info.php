<?php
$conn = mysqli_connect("localhost", "root", "", "student_info");

if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $result = mysqli_query($conn, "SELECT * FROM employees_info WHERE id=$edit_id");
    $employee = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $address = $_POST['address'];

    $sql = "UPDATE employees_info SET name='$name', email='$email', number='$phone', address='$address' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: mysql_conn2.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="POST" action="edit_info.php">
        <h2>Edit Employee</h2>
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $employee['name']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $employee['email']; ?>" required>

        <label for="number">Phone Number:</label>
        <input type="text" name="number" id="number" value="<?php echo $employee['number']; ?>" required>

        <label for="address">Address:</label>
        <textarea name="address" id="address" required><?php echo $employee['address']; ?></textarea>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
