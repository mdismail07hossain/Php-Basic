<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
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
        <form method="post">
        Enter Number: <br>  <input type="number" name="num1" id="num1" ><br><br>
        <input id="num"  type="submit" name="submit" value="submit">
      <?php
  if($_POST){
     $number=$_POST['num1'];
   $count=0;
   if($number<=1){
    echo "<h1>$number is a conseption number</h1>";
   }else{
    for($i=2;$i< $number;$i++){
        if($number % $i == 0){
            $count++;
            break;
        }
    }
   }
   if($count==0){
    echo "<h1>$number  is  a prime number</h1>";
   }else{
    echo " <h1>$number  is not a prime number</h1>";
   }
  }
    ?>
    </form>
    </section>
  
</body>
</html>