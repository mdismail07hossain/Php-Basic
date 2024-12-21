<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <style>
        /* Basic styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            height: 100vh;
        }

        table {
            width: 100%;
            margin: 20px;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 12px;
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

        td {
            border-bottom: 1px solid #ddd;
        }

        /* Responsive design */
        @media screen and (max-width: 768px) {
            table {
                width: 100%;
                font-size: 14px;
            }

            th, td {
                padding: 8px;
            }
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Product Display</h1>
    <table>
        <tr>
            <th>Brand</th>
            <th>Contact</th>
            <th>Product Name</th>
            <th>Product Price</th>
        
        </tr>
        <?php
        $connt = mysqli_connect("localhost", "root", "", "company_database");
        $dis = $connt->query("SELECT * FROM p_details");
        $count = 1;
        while (list($name, $contact, $pname, $price) = $dis->fetch_row()) {
            $count++;
            echo "
            <tr>
                <td>$name</td>
                <td>$contact</td>
                <td>$pname</td>
                <td>$price</td>
                <td>
                <a href='delete.php'>Delete</a>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>
