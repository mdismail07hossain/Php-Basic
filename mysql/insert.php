<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <label for="email">Email:</label>
    <input type="email" name="email">
    <label for="number">Number:</label>
    <input type="text" name="number">
    <label for="address">Address:</label>
    <input type="text" name="address">
    <input type="submit" name="btnsubmit" value="Submit">    
    </form>

    <?php
    require_once("connt.php");
    if (isset($_POST["btnsubmit"])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $address=$_POST['address'];

        $insertQuery="INSERT INTO  user";
    }
    ?>
</body>
</html>