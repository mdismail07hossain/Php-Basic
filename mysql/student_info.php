<?php 
$connt=mysqli_connect("localhost","root","","student_info");
// if (!$connt) {
//     die("Not connect".mysqli_connect_error());
// }else{
//     echo"connect suesscfuly";
// }

if (isset($_GET["deleteid"])) {
    $delete_id = $_GET['deleteid'];
    $del="DELETE FROM info WHERE id=$delete_id";
    if (mysqli_query($connt, $del)==true) {
        header("locatino:student_info.php");

    }
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
            text-transform: uppercase;
            color: #333;
        }
           a {
            text-decoration: none;
            padding: 5px 10px ;
            border: 1px solid red;
            background-color: red;
            color: white;
            font-weight: 600;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.2)0px 5px 10px;
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
            <th>Action</th>
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
                <td>
                <a href='student_info.php?deleteid=$id'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
