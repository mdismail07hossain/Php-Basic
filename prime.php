<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <form method="post">
        Enter Number: <br>  <input type="number" name="num1" id="num1" ><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
   $number=$_POST['num1'];
   $count=0;
   if($number<=1){
    echo "$number this a conseption number";
   }else{
    for($i=2;$i< $number;$i++){
        if($number % $i == 0){
            $count++;
            break;
        }
    }
   }
   if($count==0){
    echo "$number this is a prime number";
   }else{
    echo " $number this is not a prime number";
   }
    ?>
</body>
</html>