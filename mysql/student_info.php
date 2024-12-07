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
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            /* background: linear-gradient(135deg, #4CAF50, #81C784); */
            background-color: 	#bfa0f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        table {
            width: 90%;
            max-width: 1200px;
            border-collapse: collapse;
            margin: 20px 0;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        caption {
            padding: 10px;
            font-size: 1.5em;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }
        th, td {
            padding: 15px;
            text-align: center;
            font-size: 14px;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }
        tr:hover td {
            background-color: #e0f7fa;
            cursor: pointer;
        }
        /* Action Buttons */
        .delete, .update, .insert {
            text-decoration: none;
            padding: 8px 12px;
            font-weight: bold;
            font-size: 13px;
            color: #fff;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .delete {
            background-color: #f44336;
            border: 1px solid #f44336;
        }
        .delete:hover {
            background-color: #d32f2f;
        }
        .update {
            background-color: #757575;
            border: 1px solid #757575;
        }
        .update:hover {
            background-color: #616161;
        }
        .insert {
            background-color: #4372b0;
            border: 1px solid #4372b0;
        }
        .insert:hover {
            background-color: #bfa0f9;
        }
        /* Responsive Design */
       /* Responsive Design */
        @media (max-width: 1200px) {
            table {
                width: 95%;
            }
        }
        @media (max-width: 992px) {
            th, td {
                padding: 12px;
            }
            .delete, .update, .insert {
                font-size: 12px;
                padding: 6px 10px;
            }
        }
        @media (max-width: 768px) {
            table {
                width: 100%;
            }
            th, td {
                font-size: 12px;
                padding: 10px;
            }
            .delete, .update, .insert {
                font-size: 12px;
                padding: 6px 10px;
            }
        }
        @media (max-width: 480px) {
            body {
                padding: 20px;
            }
            table {
                width: 100%;
                font-size: 12px;
            }
            th, td {
                padding: 8px;
            }
            .delete, .update, .insert{
                font-size: 11px;
                padding: 6px 8px;
            }
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
                    <a class='delete' href='student_info.php?deleteid=$id'>Delete</a>
                    <a class='update' href='update_info.php?updateid=$id'>Update</a>
                    
                </td>
            </tr>";
        }
        // <a class='insert' href='insert_info.php'>Insert</a>
        ?>
    </table>
</body>
</html>

