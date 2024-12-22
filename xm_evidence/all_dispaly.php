<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All_Uper</title>
</head>
<style>
    table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        .inputBox {
            margin-bottom: 20px;
        }
        
        .btn input {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn input:hover {
            background-color: #e53935;
        }
</style>
<body>
     <h1>Product Display</h1>
        <table>
            <tr>
                <th>Brand</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Product Name</th>
                <th>Product Price</th>
            </tr>
            <?php
                $connt = mysqli_connect("localhost", "root", "", "student_info");
                $dis = $connt->query("SELECT * FROM product_v");
                while (list($name, $address, $contact, $pname, $price) = $dis->fetch_row()) {
                   
                         echo "
                    <tr>
                        <td>$name</td>
                        <td>$address</td>
                        <td>$contact</td>
                        <td>$pname</td>
                        <td>$price</td>
                    </tr>
                    ";
                    }
                   
              
            ?>
        </table>
    </div>
</body>
</html>