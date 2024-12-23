<?php 
$connt=mysqli_connect("localhost","root","","student_info");
if(isset($_POST['btn'])){
    $name=$_POST["name"];
    $con=$_POST["con"];
    $connt->query("call b_insert('$name','$con')");
}
if(isset($_POST['btnsub'])){
    $pname=$_POST["pname"];
    $price=$_POST["price"];
    $cont=$_POST["brand"];
    $connt->query("call p_insert('$pname','$price','$cont')");
        
}
if(isset($_POST['delBtn'])) {
    $id = $_POST['brand'];
    $connt->query("delete from manufacturer where id=$id");
   
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product_Management</title>
</head>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fafafa;
    color: #444;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 30px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #009688;
    font-size: 36px;
    font-weight: 600;
    margin-bottom: 20px;
}

form {
    margin: 20px 0;
    padding: 25px;
    background-color: #f7f7f7;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
}

form input, form select {
    width: 100%;
    padding: 12px;
    margin: 12px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    font-size: 16px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

form input:focus, form select:focus {
    border-color: #009688;
    box-shadow: 0 0 8px rgba(0, 150, 136, 0.3);
    outline: none;
}

form .submit input {
    background-color: #009688;
    color: white;
    border: none;
    padding: 14px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}
 .sumbmit input:hover {
    background-color:rgb(65, 121, 0);
    color: white;
    transition: all linear 0.3s;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
}

table th, table td {
    padding: 14px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    font-size: 16px;
}

table th {
    background-color: #009688;
    color: white;
}

table tr:hover {
    background-color: #f1f1f1;
}

.inputBox {
    margin-bottom: 30px;
}

.btn input {
    background-color: #e53935;
    color: white;
    padding: 12px 25px;
    border: none;
    text-align: center;
    cursor: pointer;
    border-radius: 8px;
    font-size: 16px;
    transition: background-color 0.3s;
}

.btn input:hover {
    background-color: #d32f2f;
}
</style>
<body>
    
    <div class="container">
        <h1>Class Information Form</h1>

        <!-- First Form: Personal Information -->
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="con">Contact:</label>
            <input type="number" name="con" id="con" required>
            <div class="sumbmit">
                <input type="submit" name="btn" value="Submit">
            </div>
        </form>

        <!-- Second Form: Product Information -->
        <form action="" method="post">
            <label for="pname">Product Name:</label>
            <input type="text" name="pname" id="pname" required>

            <label for="price">Price:</label>
            <input type="text" name="price" id="price" required>

            <label for="brand">Brand:</label>
            <select name="brand" id="brand">
                <?php
                    $connt=mysqli_connect("localhost", "root", "", "student_info");
                    $menuf=$connt->query("SELECT * FROM manufacturer");
                    while(list($id, $name) = $menuf->fetch_row()){
                        echo "<option value='$id'>$name</option>";
                    }
                ?>
            </select>

           <div class="sumbmit">
             <input type="submit" name="btnsub" value="Submit">
           </div>
        </form>

        <!-- Third Form: Delete Information -->
        <form action="" method="post">
            <div class="inputBox">
                <label for="brandName">Brand Name:</label>
                <select name="brand" id="brandName" required>
                    <?php
                        $connt=mysqli_connect("localhost", "root", "", "student_info");
                        $manuFac = $connt->query('SELECT * FROM manufacturer');
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

        <!-- Product Display Table --->
        <h1>Product Display</h1>
        <table>
            <tr>
                <th>Brand</th>    
                <th>Contact</th>
                <th>Product Name</th>
                <th>Product Price</th>
            </tr>
            <?php
                $connt = mysqli_connect("localhost", "root", "", "student_info");
                $dis = $connt->query("SELECT * FROM valid_p");
                while (list($name, $contact, $pname, $price) = $dis->fetch_row()) {
                   
                         echo "
                    <tr>
                        <td>$name</td>
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