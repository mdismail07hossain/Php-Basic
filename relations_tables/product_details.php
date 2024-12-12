

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>
    <h2>Product Form</h2>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="number">Product_Price:</label><br>
        <input type="text" id="number" name="number" required><br><br>


        <label for="email">product_brand:</label>
       <select name="manufc" >
            <?php
            $bds=mysqli_connect("localhost","root","","trianeere_info");
            $manu=$bds->query("select * from brand_information");
            while(list($id,$name)=$manu->fetch_row()){
             echo "<option value='$id'>$name</option>";
            }
        
        ?>
       </select><br><br>
               <input type="submit" value="Submit" name="subbtn">

        
    </form>
</body>
</html>