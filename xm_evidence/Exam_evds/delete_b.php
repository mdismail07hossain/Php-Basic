<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delet</title>
</head>
<body>
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
</body>
</html>