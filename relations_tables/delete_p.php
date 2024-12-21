<?php 
$connt=mysqli_connect("localhost","root","","company_database");
if(isset($_POST['delBtn'])) {
    $brId = $_POST['brand'];
    $connt->query("delete from brand_name where id = $brId");
      header("location: display.php");
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete_tegger</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .inputBox {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 6px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            background-color: #fafafa;
            box-sizing: border-box;
        }

        .btn {
            text-align: center;
        }

        .btn input[type="submit"] {
            padding: 10px 20px;
            background-color: #ff6347;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn input[type="submit"]:hover {
            background-color: #e5533b;
        }
    </style>
</head>
<body>
    <section>
        <h1>Delete Brand</h1>
        <form action="" method="post">
            <div class="inputBox">
                <label for="brand">Brand Name</label>
                <select name="brand" id="brandName" required>
                    <?php
                        $manuFac = $connt->query('SELECT * FROM brand_name');
                        while (list($brId, $brName) = $manuFac->fetch_row()) {
                            echo "<option value='$brId'>$brName</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="btn">
                <input type="submit" value="Delete" name="delBtn">
            </div>
        </form>
    </section>
</body>
</html>