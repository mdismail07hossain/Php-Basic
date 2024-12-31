<?php 
$connt=mysqli_connect("localhost","root","","student_info");

if(isset($_POST['btnsub'])){
    $pname=$_POST["pname"];
    $price=$_POST["price"];
    $cont=$_POST["brand"];
    $connt->query("call r_insert('$pname','$price','$cont')");
        
            header("location:display.php");
        
}
if(isset($_POST["back"])){
    header("location:insert_b.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Insert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(128, 121, 194);
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color:rgb(11, 2, 141);
        }
        form {
            margin: 20px 0;
            padding: 20px;
            background-color:rgb(220, 188, 250);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        form input, form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        form .sumbmit input {
            background-color:rgb(5, 54, 6);
            color: white;
            font-size: 22px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        form .sumbmit input:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        .inputBox {
            margin-bottom: 20px;
        }
        
        .btn input {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;

        }
        .btn input:hover {
            background-color: #e53935;
        }
        .back_bt{
            display: flex;
            justify-content: end;
        }
        .form{
            background: transparent;
            width: 100px;
        }
        button{
            background-color: blue;
            border: none;
            padding: 6px 10px;
            font-weight: 600;
            color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>
<body>
<div class="back_bt" >
    <form class="form" action="" method="post">
    <button type="submit" name="back">Back To Brand</button>
</form>
</div>
    <div class="container">
        <h1>Product Add Form</h1>

        
        

        <!-- Second Form: Product Information -->
        <form action="" method="post">
            <label for="pname">Product Name:</label>
            <input type="text" name="pname" id="pname" required>

            <label for="price">Price:</label>
            <input type="text" name="price" id="price" required>

            <label for="brand">Brand:</label>
            <select name="brand" id="brand">
                <?php
                    $connt=mysqli_connect("localhost", "root", "", "student_info");
                    $menuf=$connt->query("SELECT * FROM n_student");
                    while(list($id, $name) = $menuf->fetch_row()){
                        echo "<option value='$id'>$name</option>";
                    }
                ?>
            </select>

           <div class="sumbmit">
             <input type="submit" name="btnsub" value="Submit">
           </div>
        </form>

      
        
    </div>

</body>
</html>
