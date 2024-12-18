


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Brand</title>
</head>
<body>
   
          
    <section>
        <form action="" method="post">
        <div class="inputBox">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
        <div class="inputBox">
                <label for="price">Price</label>
                <input type="text" name="price" id="price">
            </div>
            <div class="inputBox">
                <label for="brandName">BrandName</label>
                <select name="brandName" id="brandName">
                <?php
                        $dbConnect = mysqli_connect("localhost","root","","company_database");
                        $manuFac = $dbConnect->query(('select * from brand_info'));
                        while(list($brId,$brName) = $manuFac->fetch_row()) {
                            echo "<option value='$brId'>$brName</option>";
                        }
                    ?>
                </select>
            </div>
            

            <div class="btn">
                <input type="submit" value="addBtn" name="addBtn">
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

    $insertProduct = $dbConnect->query("call p_insert('$prName', '$brandName', '$price')");
    header("Location:" . $_SERVER["PHP_SELF"]);
    exit;
}

// del info 


?>