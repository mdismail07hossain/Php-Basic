<?php
session_start();

if(isset($_POST["btnsubmit"])){
    $name=$_POST["name"];
    $password=$_POST["passaword"];
    // $message=$_POST["message"];

    if($name==="Ismail"&&$password==="123"){
        $_SESSION["ismail"]=$name;
        header("location:form.php");
    }else{
        if($name!=="Ismail"){
            $message="<div class='msg'>Your user name is incorrect.</div>";
        }
        if($password!=="123"){
            $message1="<div class='msg'>Your password  is incorrect.</div>";
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    form{
        background-color: skyblue;
        color: white;
        border-radius: 10px;
        padding: 30px 40px;
        
    }
    input{
        width: 100%;
        border: 2px solid greenyellow;
        outline: none;
        padding: 5px;
        margin-bottom:10px ;
    }
    button{
        padding: 7px 10px;
        background-color: greenyellow;
        color: red;
        border-radius: 5px;
    }
    section{
        margin: 0 auto;
        width: 400px;
    }

    .msg {
        text-align: center;
        font-size: 22px;
        font-weight: 700;
        color: red;
    }
</style>
<body>
   <section>
     <form action="#" method="post">
        <label for="name">User_name</label>
        <input type="text" name="name">
        <label for="password">Password</label>
        <input type="password" name="passaword">
        <button  type="submit" name="btnsubmit">Submit</button>
    </form>
    <!-- <div name="message"></div> -->

    <?php 
    
    echo isset($message) ? $message :"";
    echo "<br>";
    echo isset($message1) ? $message1 :"";
    ?>
   
    
  
    
   </section>
</body>
</html>