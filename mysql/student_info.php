<?php 
$connt=mysqli_connect("localhost","root","","student_info");
if (!$connt) {
    die("Not connect".mysqli_connect_error());
}else{
    echo"connect suesscfuly";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
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
        tr td:first-child, tr th:first-child {
            text-align: center;
        }
        tr td:last-child, tr th:last-child {
            font-style: italic;
        }
        caption {
            margin-bottom: 10px;
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <table>
        <caption>Student Information</caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Department</th>
            <th>Round</th>
            <th>Course</th>
        </tr>
        <?php 
        $students = $connt->query("SELECT * FROM info");
        while (list($id, $name, $email, $number, $department, $round, $course) = $students->fetch_row()) {
            echo "<tr>
                <td>$id</td>
                <td>$name</td>
                <td>$email</td>
                <td>$number</td>
                <td>$department</td>
                <td>$round</td>
                <td>$course</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
