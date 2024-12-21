<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosudouer</title>
</head>
<body>
    <form action="" method="post">
        <label for="brand">Brand_Name:</label>
        <select name="brand" id="">
            <option value="souny">Souny</option>
            <option value="BmW">BmW</option>
            <option value="RRR">RRR</option>
            <option value="apple">apple</option>
            <option value="Hp">Hp</option>
            <option value="Ascr">Ascr</option>
            <option value="walton">walton</option>
            <option value="toyota">toyota</option>
            <option value="redmi">redmi</option>
            <option value="oppo">oppo</option>
        </select>
        <br><br>
        <label for="contact">Contact</label>
        <input type="text" name="contact">
        <br><br>
        <input type="submit" name="btn" value="Submit">
    </form>
    <br><br>
    <form action="" method="post">
        <label for="name">P_name:</label>
        <input type="text" name="p_name">
        <br><br>
        <label for="bname">Brand_Name:</label>
        <select name="bname" id="">
            <?php
                $connt=mysqli_connect("localhost","root","","company_databases");
               $manufic=$connt->query("SELECT * FROM brand_name");
                while(list($id,$name) = $manufic->fetch_row()){
                    echo"<option values='$id'>$name</option>";
                }
            ?>
        </select>
        <br><br>
        <label for="price">Price:</label>
        <input type="text" name="price">
        <br><br>
        <input type="submit" name="btsub" value="Submit">
    </form>
</body>
</html>
<?php 
$connt = mysqli_connect("localhost","root","","company_databases");
if(isset($_POST["btn"])){
    $brand = $_POST['brand'];
    $contact = $_POST['contact'];
    $connt->query("call b_insert('$brand','$contact')");
}
if (isset($_POST["btsub"])) {
    $name= $_POST["p_name"];
    $b_name = $_POST["bname"];
    $price= $_POST["price"];
    $connt->query("call p_insert('$name','$b_name','$price')");
}
?>