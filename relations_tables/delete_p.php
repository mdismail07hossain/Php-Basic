<?php 
$connt=mysqli_connect("localhost","root","","company_database");
if(isset($_POST['delBtn'])) {
    $brId = $_POST['brand'];
    $connt->query("delete from brand_name where id = $brId");
    // header("location: showData.php");
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete_tegger</title>
</head>
<body>
           <section>
            <form action="" method="post">
                <div class="inputBox">
                    <label for="brand">BrandName</label>
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
                    <input type="submit" value="delete" name="delBtn">
                </div>
            </form>
    </section>
</body>
</html>