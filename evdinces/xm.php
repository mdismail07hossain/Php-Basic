<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xm</title>
</head>
<style>
   #num {
        padding: 7px 10px ;
        border-radius: 5px;
        outline:none;
        background-color:green;
        color:white;
        border:none;
        box-shadow:rgba(0,0,0,0.35)0px 5px 15px;

    }
    input{
        padding: 7px 10px ;
    }
    section{
        margin: 0 auto;
        width: 300px;
    }
    form{
         background-color:grey;
         padding: 30px 40px;
        color:white;
        border:none;
        border-radius: 5px;
        box-shadow:rgba(0,0,0,0.35)0px 5px 15px;
    }
</style>
<body>
   <section>
     <form action="#" method="post" >
       <h2> Enter your number :</h2>
        <input type="number" id="number" name="number" placeholder="Enter number...." ><br><br>
        <input id="num"  type="submit" value="Find_Factorial">
    </form>
   </section>

    <?php
    if($_POST){
            $number=$_POST['number'];
    // echo"<h3> Find this number  Factorial   </h3> ";
    $fact=1;
    for($i=2;$i<=$number;$i++){
        $fact=$fact*$i;
    }
    echo"<h3> $number this number  Factorial is $fact  </h3> ";
    }

    ?>
</body>
</html>