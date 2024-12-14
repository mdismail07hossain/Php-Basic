<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
           
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
            box-sizing: border-box;
        }

        label {
            font-size: 14px;
            margin-bottom: 8px;
            color: #555;
            display: block;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Product Form</h2>
        <form action="" method="POST">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="number">Product Price:</label>
            <input type="text" id="number" name="number" required>

            <label for="manufc">Product Brand:</label>
            <select name="manufc" id="manufc" required>
                <?php
                $bds = mysqli_connect("localhost", "root", "", "trianeere_info");
                if ($bds) {
                    $manu = $bds->query("SELECT * FROM brand_information");
                    while (list($id, $name) = $manu->fetch_row()) {
                        echo "<option value='$id'>$name</option>";
                    }
                } else {
                    echo "<option value=''>Unable to load brands</option>";
                }
                ?>
            </select>

            <input type="submit" value="Submit" name="subbtn">
        </form>
    </div>
</body>
</html>
