<?php 
$connt=mysqli_connect("localhost","root","","student_info");
if(isset($_POST['delBtn'])) {
    $id = $_POST['brand'];
    $connt->query("delete from n_student where id=$id");
    //   header("location: display.php");
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class_xm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(151, 198, 206);
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color:rgb(19, 3, 110);
        }
        form {
            margin: 20px 0;
            padding: 20px;
            background-color:rgb(242, 175, 255);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        form input, form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        form .sumbmit input {
            background-color:rgb(1, 32, 2);
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        form .sumbmit input:hover {
            background-color: #45a049;
        }
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
            background-color:rgb(60, 80, 255);
            color: white;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        .inputBox {
            margin-bottom: 20px;
        }
        
        .btn input {
            background-color:rgb(104, 11, 4);
            color: white;
            padding: 10px 20px;
            font-size: 22px;
            font-weight: 700;
            border: none;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn input:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Third Form: Delete Information -->
        <form action="" method="post">
            <h1>Delete Product </h1>
            <div class="inputBox">
                <label for="brandName">Brand Name:</label>
                <select name="brand" id="brandName" required>
                    <?php
                        $connt=mysqli_connect("localhost", "root", "", "student_info");
                        $manuFac = $connt->query('SELECT * FROM n_student');
                        while (list($id, $name) = $manuFac->fetch_row()) {
                            echo "<option value='$id'>$name</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="btn">
                <input  type="submit" value="Delete" name="delBtn">
            </div>
        </form>

        <!-- Product Display Table -->
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
