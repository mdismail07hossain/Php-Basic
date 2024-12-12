<?php 
$connt=mysqli_connect("localhost","root","","trianeere_info");

if(isset($_POST["subbtn"])){
    $name=$_POST['name'];
    // $email=$_POST['email'];
    $number=$_POST['number'];
    // insert query create here 
    $connt->query("call brand_name('$name','$number')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>
    <h2>Product Form</h2>
    <form action="#" method="POST">
        <label for="name">Product_Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="number">product_brand:</label><br>
        <input type="tel" id="number" name="number" required><br><br>
        <input type="submit" value="Submit" name="subbtn">
    </form>
</body>
</html>