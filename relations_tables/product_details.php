<?php 
$bds=mysqli_connect("localhost","root","","trianeere_info");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>
    <form action="#" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">product_brand:</label><br>
       <select name="" id="">
        <option value=""></option>
       </select>

        <label for="number">Product_Price:</label><br>
        <input type="tel" id="number" name="number" required><br><br>

        <input type="submit" value="Submit" name="subbtn">
    </form>
</body>
</html>