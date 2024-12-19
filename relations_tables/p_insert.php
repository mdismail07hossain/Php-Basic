

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Brand</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        section {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .inputBox {
            margin-bottom: 20px;
        }
        .inputBox label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }
        .inputBox input,
        .inputBox select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
        }
        .inputBox input:focus,
        .inputBox select:focus {
            outline: none;
            border-color: #007BFF;
        }
        .btn {
            text-align: center;
        }
        .btn input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        .btn input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <section>
        <h1>Insert Brand</h1>
        <form action="" method="post">
            <div class="inputBox">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="inputBox">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" required>
            </div>
            <div class="inputBox">
                <label for="brandName">Brand Name</label>
                <select name="brandName" id="brandName" required>
                    <?php
                        $dbConnect = mysqli_connect("localhost", "root", "", "company_database");
                        $manuFac = $dbConnect->query('SELECT * FROM brand_name');
                        while (list($brId, $brName) = $manuFac->fetch_row()) {
                            echo "<option value='$brId'>$brName</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="btn">
                <input type="submit" value="Add Brand" name="addBtn">
            </div>
        </form>
    </section>

</body>
</html>



<?php 

// add product 
if(isset($_POST['addBtn'])) {
    $prName = $_POST['name'];
    $brandName = $_POST['brandName'];
    $price = $_POST['price'];
    $dbConnect = mysqli_connect("localhost","root","","company_database");
    $insertProduct = $dbConnect->query("call p_insert('$prName', '$brandName', '$price')");
    header("Location: display.php");
    exit;
}

// del info 


?>