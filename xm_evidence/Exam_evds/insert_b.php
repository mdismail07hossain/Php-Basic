<?php 
$connt=mysqli_connect("localhost","root","","student_info");
if(isset($_POST['btn'])){
    $name=$_POST["name"];
    $add=$_POST["add"];
    $con=$_POST["con"];
    $connt->query("call s_insert('$name','$add','$con')");
        // header("location:insert_p.php");
}

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand insert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(143, 179, 179);
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
            color:rgb(5, 18, 133);
        }
        form {
            margin: 20px 0;
            padding: 20px;
            background-color:rgb(234, 208, 255);
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
    </style>
</head>
<body>

    <div class="container">
        <h1>Manufacturer Add Form</h1>

        <!-- First Form: Personal Information -->
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="add">Address:</label>
            <input type="text" name="add" id="add" required>

            <label for="con">Contact:</label>
            <input type="number" name="con" id="con" required>

            <div class="sumbmit">
                <input type="submit" name="btn" value="Submit">
            </div>
        </form>          
    </div>

</body>
</html>
