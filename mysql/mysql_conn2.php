<?php  
$conn=mysqli_connect("localhost","root","","company_database");
// if(!$conn){
//     die("Connections fialed");
// }else{
//     echo"<b style='color:green;'>Connections Successful</b>";
// }


if(isset($_GET['delete'])){
    $delete_id= $_GET['delete'];
    print_r($delete_id) ;
    $sql="DELETE FROM employees_info WHERE id=$delete_id";
    if(mysqli_query($conn,$sql)== true){
        header("location:mysql_conn2.php");
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
        a {
            text-decoration: none;
            padding: 5px 10px ;
            border: 1px solid red;
            background-color: red;
            color: white;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <table>
        <caption>Empolyees Information</caption>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php 
            $employees = $conn->query("SELECT * FROM  employees_info");
            while(list($id, $name, $email, $phone, $address) = $employees->fetch_row()){
                echo "
                    <tr> 
                        <td>$id</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$address</td>
                         <td>
                        <a href='mysql_conn2.php?delete=$id'>Delete</a>
                        </td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>
