<?php
session_start();
if(!isset($_SESSION['ismail'])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        
form {
    width: 300px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}


form label {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}


form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
}
form input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
}


button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    box-sizing: border-box;
    
}
button a{
    text-decoration: none;
}

button:hover {
    background-color: #45a049;
}


    </style>
</head>
<body>
    <form action="#" method="post">
        <h1>Logout</h1>
        <strong>Any Requirment:</strong> <br>
        <input type="text" name="idtxt">
        <br>
        <strong>Feedback:</strong> <br>
        <input type="text" name="nametxt" >
        <br>
        <button ><a href="logout.php">LOG-OUT</a></button>

    </form>
</body>
</html>