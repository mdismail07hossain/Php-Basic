<?php  
$conn = mysqli_connect("localhost", "root", "", "student_info");

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    // Delete the employee record
    $sql = "DELETE FROM employees_info WHERE id=$delete_id";
    if (mysqli_query($conn, $sql)) {
        // Reset the auto-increment value to the highest current ID to keep sequence clean
        $resetAutoIncrement = "ALTER TABLE employees_info AUTO_INCREMENT = 1";
        mysqli_query($conn, $resetAutoIncrement);

        // Optionally, if you want to reset the IDs to maintain a clean sequence from 1, 
        // you can do this by selecting the last max ID, then resetting the auto-increment.
        // $resetAutoIncrement = "ALTER TABLE employees_info AUTO_INCREMENT = (SELECT MAX(id) FROM employees_info) + 1";
        
        // Redirect to refresh the page after deletion
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
    <title>User Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        caption {
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            color: #333;
        }

        .delete{
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid red;
            background-color: red;
            color: white;
            font-weight: 600;
        }
        .edit{
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid gray;
            background-color: gray;
            color: white;
            font-weight: 600;  
        }
    </style>
</head>
<body>
    <table>
        <caption>Employees Information</caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php 
            $employees = $conn->query("SELECT * FROM employees_info");
            $counter = 1; // Start counter from 1 for sequential IDs
            while ($row = $employees->fetch_assoc()) {
                $id = $counter++; // Use the counter for IDs
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['number'];
                $address = $row['address'];

                echo "
                    <tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$address</td>
                        <td>
                            <a class='delete' href='mysql_conn2.php?delete={$row['id']}'>Delete</a>
                            <a class='edit' href='edit_info.php?edit={$row['id']}'>Edit</a>
                        </td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>
