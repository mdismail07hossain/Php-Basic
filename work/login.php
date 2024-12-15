<?php
session_start();

if(isset($_POST["btnsubmit"])){
    $name=$_POST["name"];
    $password=$_POST["passaword"];
    $email=$_POST["email"];
    $emailchaker= '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    // $message=$_POST["message"];

  
        if($name!=="Ismail"){
            $message="<div class='msg'>Your user name is incorrect.</div>";
        }
        if($password!=="123"){
            $message1="<div class='msg'>Your password  is incorrect.</div>";
        }
        
    
  if (!preg_match($emailchaker, $email)) {
       // Valid email
       $message2="<div class='msg'>Please Enter a valid email..</div>"; // Invalid email
    } else {
    
  if($name==="Ismail"&&$password==="123"){
        $_SESSION["ismail"]=$name;
        header("location:form.php");
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
    body{
        background-color: gray;
    }
    form{
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.35)0px 5px 15px;
        color: gray;
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
        text-align: left;
        font-size: 18px;
        font-weight: 600;
        color: red;
    }
</style>
<body>
   <section>
     <form action="#" method="post">
        <label for="name">User_name</label>
        <input type="text" name="name">
        <?php
        echo isset($message) ? $message: "";
        ?>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <?php
        echo isset($message2) ? $message2: "";
        ?>
        <label for="password">Password</label>
        <input type="password" name="passaword">
        <?php
        echo isset($message1) ? $message1: "";
        ?>
        <button  type="submit" name="btnsubmit">Submit</button>
    </form>
    <!-- <div name="message"></div> -->

    <?php 
    
    // echo isset($message) ? $message :"";
    echo "<br>";
    // echo isset($message1) ? $message1 :"";
    ?>
   
    
  
    
   </section>
</body>
</html>