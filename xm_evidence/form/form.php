<?php
require_once("main.php");
if(isset($_POST["btnsubmit"])){
    $id=$_POST["txtid"];
    $name=$_POST["txtname"];
    $batch=$_POST["txtbatch"];

    $obj = new Student($id,$name,$batch);
    $obj->save_data();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<style>
    section{
        margin: 0 auto;
        width: 400px;
    }
    form{
        padding: 30px 40px;
        box-shadow: rgba(0, 0, 0, 0.35)0px 5px 15px;
        border-radius: 10px;
        background-color: white;
    }
    input{
        width: 100%;
        margin: 10px 0;
        padding:  5px ;
        outline: none;
        box-shadow: rgba(0, 0, 0, 0.35)0px 5px 1px;
        border: 1px solid green;
        border-radius: 3px;
    }
    #submit{
        background-color: green;
        color: white;
        width: 100px;
        margin-left: 37%;
        
    }
    tr,th{
        background-color: blue;
        color: white;
    }
    tr,td{
       background-color: white;
        color: black; 
    }
    h3{
        text-align: center;
        font-size: 26px;
        color: green;
    }
    body{
        background-color: grey;
    }
</style>
<body>
    <section>
        <form action="#" method="post">
            <h3>Trainee Form</h3>
           <div>
             <label for="id">User_ID:</label>
            <input type="number" name="txtid">
           </div>
           <div>
             <label for="name">Name:</label>
            <input type="text" name="txtname">
           </div>
           <div>
             <label for="id">Batch</label>
            <input type="text" name="txtbatch">
           </div>
           <input id="submit" type="submit" name="btnsubmit" value="Submit">
        </form>
    </section>

    <?php
    Student::result();
    ?>
</body>
</html>