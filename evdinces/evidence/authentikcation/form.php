<?php
session_start();
if(!isset($_SESSION['ismail'])){
    header("location:login.php");
}
if(isset($_POST["btnsubmit"])){
    header("location:logout.php");
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


form input[type="submit"] {
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

form input[type="submit"]:hover {
    background-color: #45a049;
}


    </style>
</head>
<body>
    <form action="#" method="post">
        <h1>Fill this Form</h1>
        <strong>User_id:</strong> <br>
        <input type="number" name="idtxt">
        <br>
        <strong>Name:</strong> <br>
        <input type="text" name="nametxt" >
        <br>
        <strong>Email:</strong> <br>
        <input type="number" name="idtxt">
        <br>
        <strong>Password:</strong> <br>
        <input type="text" name="nametxt" >
        <br>
        <strong>Address:</strong> <br>
        <input type="number" name="idtxt">
        <br>
        <strong>Number:</strong> <br>
        <input type="text" name="nametxt" >
        <br>
        <strong>Round:</strong> <br>
        <input type="number" name="idtxt">
        <br>
        <strong>Skill:</strong> <br>
        <input type="text" name="nametxt" >
        <br>
        <input type="submit" value="Submit" name="btnsubmit" >

    </form>
</body>
</html>