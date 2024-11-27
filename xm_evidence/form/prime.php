<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<style>
     #num {
        width: 100px;
        margin-left: 37%;
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
        width: 100%;
         margin-bottom:10px ;
        border-radius: 5px;
    }
    section{
        margin: 0 auto;
        width: 400px;
    }
    form{
         background-color:grey;
         padding: 30px 40px;
        color:white;
        font-weight: 600;
        border:none;
        border-radius: 5px;
        box-shadow:rgba(0,0,0,0.35)0px 5px 15px;
    }
    h3{
        text-align: center;
        font-size: 26px;
        /* color: green; */
    }
     body{
        background-color: skyblue;
    }
</style>
<body>
    <section>
        <form method="post">
            <h3>This is Find Prime Number Calculator</h3>
        Enter Number: <br> <br> <input type="number" name="num1" id="num1" ><br><br>
        <input id="num"  type="submit" name="submit" value="submit">
      <?php
  if($_POST){
     $number=$_POST['num1'];
   $count=0;
   if($number<=1){
    echo "<h3>$number is a conseption number</h3>";
   }else{
    for($i=2;$i< $number;$i++){
        if($number % $i == 0){
            $count++;
            break;
        }
    }
   }
   if($count==0){
    echo "<h3>$number  is  a prime number</h3>";
   }else{
    echo " <h3>$number  is not a prime number</h3>";
   }
  }
    ?>
    </form>
    </section>
  
</body>
</html>