<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
</head>
<style>
table{
    border-collapse: collapse;
}
</style>
<body>
    <table border="1">
        <tr>
            
            <th>Brand</th>
            <th> Contact</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>
            <?php
            $connt=mysqli_connect("localhost","root","","trianeere_info");
            $dis=$connt->query("SELECT * from product_display");
            $count=1;
            while(list($name,$contact,$pname,$price)=$dis->fetch_row()){
                $count++;
                echo "
                <tr>
                <td>$name</td>
                <td>$contact</td>
                <td>$pname</td>
                <td>$price</td>
                </tr>
                ";
            }
            ?>
        
    </table>
</body>
</html>